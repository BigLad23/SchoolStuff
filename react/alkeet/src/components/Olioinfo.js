const OlioInfo = ({student}) => {
    return (
        <div className="infoText">
            <p>Name: {student.name}</p>
            <p>Address: {student.address}</p>
            <img alt="person" src={student.img} />
            </div>
        
    )
}

const OlioInfos = ({students}) => {
    return (
        <div className="students">
            {students.map(o =><OlioInfo key={o.id} student={o} />)}
        </div>
    )
}
export {OlioInfo, OlioInfos};
