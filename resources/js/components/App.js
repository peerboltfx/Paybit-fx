import React, { Component } from 'react';
import {BrowserRouter as Router , Route , Link , Switch} from 'react-router-dom';
import ReactDOM from 'react-dom';
import NavTabs from './components/Navbar';
import Account from  './components/coins';
import FullWidthGrid from  './components/contract';
import RateUs from  './components/rateUs';
import Coined from  './components/coined';



export default class Application extends Component {

    render(){

        return(
            <Router>
                <NavTabs/>
               
               <Switch>
               
                   <Route path="/Account" exact component={Account} />
                   <Route path="/Account/balance" exact component={FullWidthGrid} />
                   <Route path="/Account/Ongoing" exact component={RateUs} />
                   <Route path="/Account/Coined" exact component={Coined} />

               </Switch>

            </Router>
        )
    }
}

if(document.getElementById('application')){
    ReactDOM.render(<Application /> , document.getElementById('application'));
}