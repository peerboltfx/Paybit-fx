import React, { useState , useEffect } from 'react';
import axios from 'axios';
import ReactDOM from 'react-dom';
import MenuItem from '@material-ui/core/MenuItem';
import Select from '@material-ui/core/Select';
import { makeStyles } from '@material-ui/core/styles';



function getStyles(name, personName, theme) {
    return {
      fontWeight:
        personName.indexOf(name) === -1
          ? theme.typography.fontWeightRegular
          : theme.typography.fontWeightMedium,
    };
  }

  const useStyles = makeStyles({
    root: {
      width: '100%',
    },
    container: {
      width: '100%',
    },
  });

export default function Countries (){



const [ state , setUser]= useState([]);

useEffect(() => {
    axios.get('https://restcountries.eu/rest/v2/all').then(res=> {
        setUser(res.data)
    })
    .catch(error => console.log(error))
}, []);

    const styles= useStyles();

    return(
       <Select name='country' className={styles.container}>
           <option value='%%%%'>--select</option>
        {state.map(nation => {
            return(  <MenuItem key={nation.name}  value={nation.name}>
            {nation.name}
          </MenuItem> )
       })}
        </Select>
   )

}

   

if(document.getElementById('countries')){
    ReactDOM.render(<Countries /> , document.getElementById('countries') );
}
