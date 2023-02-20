const CourseList = ({course}) => {
    return (   
        <tr>
            <td>{course.name}</td>
            <td>{course.teacher}</td>
            <td>{course.room}</td>
        </tr>
    )
}
const Courses = ({courses}) => {
    return (
        <table>
            <tbody>
               <tr>
                <th>course</th>
                <th>teacher</th>
                <th>room</th>
            </tr>
            
            {courses.map(c =><CourseList key={c.id} course={c} />)}
            </tbody>
        </table>
    )
}

export {CourseList, Courses};
