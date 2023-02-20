import React, { useEffect, useState } from "react";
import axios from "axios";
import './App.css';
import Notes from "./components/note.js";
import Notesform from "./components/notesform.js";

const basedURL = "http://localhost:3001/notes";

function App() {

  const [notes,setNotes] = useState([]);
  const [infoText, setInfoText] = useState("");
  const [errorText, setErrorText] = useState("");

  const startHook = () => {
    axios.get(basedURL).then(response => {
      const notes = response.data;
      console.log(notes);
      setNotes(notes);
    })
      .catch(error => {setErrorText(error.message + ": käynnistä json-server")});
  }
    const timerHook = () => {
     if(infoText === "") return;
       const id = setInterval(()=> setInfoText(""), 3000);
        return () => clearInterval(id);
    }
    const errorHook = () => {
      if(errorText === "") return; 
        const id = setInterval(()=> setErrorText(""), 3000);
         return () => clearInterval(id);
     }


    
    useEffect(startHook, []);
    useEffect(timerHook, [infoText]);
    useEffect(errorHook, [errorText]);

  //consolille data:
  const addNote = (e, newNote, newImportantNote) => {
    e.preventDefault();
    const note = { 
      content: newNote, date: new Date().toISOString(), important: newImportantNote,
    }
    axios.post(basedURL, note).then(response => {
     console.log(response.data);
     setNotes(notes.concat(response.data));
     setInfoText("Note added");
    })
    .catch(error => {setErrorText(error.message + ": käynnistä json-server")});
  }
  const updateNoteImportance = (e, id) => {
    const tempNote = notes.find(notes => notes.id === id);
    tempNote.important = !tempNote.important;
    axios.put(`${basedURL}/${id}`, tempNote).then(response => {
      console.log("updated!", id);
      const tempNotes = notes.map(notes => {
        if(notes.id === id) 
        notes = tempNote
        return notes
      })
      setNotes(tempNotes);
      setInfoText("Note updated!");
    })
    .catch(error => {setErrorText(error.message + ": käynnistä json-server")});
  }
  
  const deleteNote = (e, id) => {
    e.stopPropagation();
    axios.delete(`${basedURL}/${id}` ).then(response => {
        // const notes = notes.filter(notes => notes.id !== id);
        // console.log("poistettu", id)
        setInfoText("Note deleted!");
        setNotes(notes.filter(notes => notes.id !== id));
    })
    .catch(error => {setErrorText(error.message + ": käynnistä json-server")});
  }


  return (
    <div className="App">
      <header className="App-header">
        <p>
          Harjoitus 3: Notes demo
        </p>
      </header>
      <div>
        <button onClick={() => setInfoText("hyvin toimii")}>click</button>
        <h3 className="info" >{infoText}</h3>
      <h3 className="error">{errorText}</h3>
      </div>
      <h2>Add note</h2>
      <Notesform submitHandler={addNote}/>
      <h2>Your notes</h2>
      <Notes notes={notes} setNotes={setNotes} updateHandler={updateNoteImportance} deleteHandler={deleteNote}/>
    </div>
  );
}
export default App;