import React, { useState } from 'react';

const Link = ({link, addLike}) => {
    return (
        <div>
            <a href={link.url} alt="url">
                {link.description}
            </a>
            <button onClick={()=>addLike(link.id)}> Likes:{link.likes}</button>
        </div>
    )
}

const LinkForm = ({ submitHandler }) => {
    const [url, setUrl] = useState("");
    const [desc, setDesc] = useState("");
    return (
        <form onSubmit={e => submitHandler(e,{ id: Math.round(Math.random()*100000000),
            url: url, 
            description: desc,
             likes:0 })}>
            <p>Url:
                <input onChange={e => setUrl(e.target.value)} value={url} type="text" id="url"></input>
            </p>
            <p>Desc:
                <input onChange={e => setDesc(e.target.value)} value={desc} type="text" id="desc"></input>
            </p>
            <input type="submit" value="tallenna"></input>
        </form>
    )
}

const Links = ({ links, setLinks }) => {
    const submitHandler = (e, newLink) => {
        e.preventDefault();
        setLinks(links.concat(newLink));
    }

    const addLike = id => {
        const tempLinks= links.map(l => {
            if(id === l.id){
            return {...l, likes: l.likes + 1};
            } else
            return l;
    })
    setLinks(tempLinks);
    }

    const calcTotal = () => {
        const likes = links.map(l => l.likes) 
        return likes.reduce((a,b) => a + b, 0)
    }
    return (
        <div>
            <LinkForm submitHandler={submitHandler} />
            {links.map(l => <Link key={l.id} link={l} addLike={addLike} />)}
            Yhteensä: {calcTotal()}
        </div>
    )
}

export default Links;