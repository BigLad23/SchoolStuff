import React, {useState} from 'react';
const Skills = ({skills, setSkills}) => {
    const [newSkill, setNewSkill] = useState(" ");
    console.log(newSkill);
    return (<div className="skillsarea">
        <form onSubmit={e=>{e.preventDefault();
        setSkills(skills.concat(newSkill));
        setNewSkill(" ");
        }}>
        <input type="Text" value={newSkill} onChange={e=>setNewSkill(e.target.value)} ></input>
        </form>
        {skills.map((s, i) =>  <div key={i} className="skill">{s}</div>)}
        </div>
        )
}

export default Skills;