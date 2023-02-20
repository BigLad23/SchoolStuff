import './App.css';

import React, {useState} from 'react';
import {OlioInfos} from './components/Olioinfo.js';
import {studentsData} from './components/studentData.js';
import Skills from './components/skills.js';
import {Courses} from './components/courses.js';
import {coursesData} from './components/coursesData.js';
import {Countries} from './components/countries.js';
import {countryData} from './components/countriesData.js';
import Links from './components/links.js';


function App() {
  const [show, setShow] = useState(false)
  const [show2, setShow2] = useState(false)
  const [show3, setShow3] = useState(false)
  const [show4, setShow4] = useState(false)
  const [show5, setShow5] = useState(false)
  const [counter, setCounter] = useState(0);
  const [skills, setSkills] = useState(["HTML ja CSS", " PHP"]);
  const [links, setLinks] = useState([]);
  return (
    <div className="App">
      <header className="App-header">
        <p>
          Harjoitus 1: Alkeet
          <button onClick={()=>setCounter(counter + 1)}>paina tästä {counter}</button> 
        </p>
      </header>
  <h1>Tehtävä 1</h1>
  <button onClick={()=>setShow(!show)}>{show ? "piilota":"näytä"}</button>    
   <div className="info">
  {show && <OlioInfos students={studentsData} /> }
   </div>
    <h1>Tehtävä 2</h1>
   <button onClick={()=>setShow2(!show2)}>{show2 ? "piilota":"näytä"}</button>  
   <div className="courses">
  {show2 && <Courses courses={coursesData} /> }
   </div>
   <h1>Tehtävä 3</h1>
   <button onClick={()=>setShow3(!show3)}>{show3 ? "piilota":"näytä"}</button>    
   <div className="countries">
    {show3 && <Countries countries={countryData} /> }
   </div>
   <h1>Tehtävä 6</h1>
   <button onClick={()=>setShow4(!show4)}>{show4 ? "piilota":"näytä"}</button> 
   <div>
  {show4 && <Skills skills={skills} setSkills={setSkills} /> }    
    </div>
    <h1>Tehtävä 7</h1>
    <button onClick={()=>setShow5(!show5)}>{show5 ? "piilota":"näytä"}</button> 
   <div>
  {show5 && <Links links={links} setLinks={setLinks} /> } 
    </div>
    </div>
  );
}

export default App;
