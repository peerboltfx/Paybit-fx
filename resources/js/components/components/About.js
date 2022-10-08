import React from 'react';
import ReactDOM from 'react-dom';
import CustomizedTimeline from '../material-element/customizedTimeline';
import ControlledAccordions from '../material-element/accordion';
import '../../../css/stock.css';
import Statistics from '../material-element/stat';
import BasicTable from '../material-element/datatable';




export default function About(){

    return(
        <div className=''>
            <CustomizedTimeline />
            <ControlledAccordions />
            <Statistics />
           <BasicTable />
        </div>
    )
}
ReactDOM.render(<About /> , document.getElementById('About'));