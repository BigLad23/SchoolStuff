const Notes = ({notes, deleteHandler, updateHandler}) => {
    return (
        <div>
            <ul>{notes.map(note => <li onClick={e=>updateHandler(e, note.id)} className={note.important ? "important" : "normal"}>{note.content}
            <button onClick={e=>deleteHandler(e, note.id)}>Delete</button>
            </li>)}</ul>
        </div>
    );
    }

    export default Notes;