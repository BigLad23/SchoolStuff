const CountryList = ({country}) => {
    return (
        <div className="country">
            <img alt="flag" src={country.flag} />
            <p>Country: {country.name}</p>
            <p>Capital: {country.capital}</p>
            <p>Population: {country.population}</p>
            
        </div>
    )
}

const Countries = ({countries}) => {
    return (
        <div>
            {countries.map(s =><CountryList key={s.id} country={s} />)}
        </div>
    )
}
export {CountryList, Countries};