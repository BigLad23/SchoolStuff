import React, {useState} from 'react';
const Notesform =({submitHandler}) => {
    const [newNote, setNewNote] = useState(" ");
    const [newImportantNote, setNewImportantNote] = useState(false);
    console.log("test", newNote, newImportantNote);
    return (
      <form className="notes-form" onSubmit={e => { 
          submitHandler(e, newNote, newImportantNote); 
          setNewNote(" ");
          setNewImportantNote(false);
      }}>
        <input type="checkbox" id="important" name="important" value={newImportantNote} onChange={e=>setNewImportantNote(!newImportantNote)} checked={newImportantNote}  />
        <label for="important">Important</label><br />
        <input type="text" placeholder="Enter your note here" value={newNote} onChange={e=>setNewNote(e.target.value)} />
        <button type="submit" value="Save">Add Note</button>
      </form>   
    );
  };

export default Notesform;