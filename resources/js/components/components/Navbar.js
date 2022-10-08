import React from 'react';
import {Link} from 'react-router-dom';
import '../../../css/navbar.css';
import AddCircleIcon from '@material-ui/icons/AddCircle';
import AccountBalanceWalletIcon from '@material-ui/icons/AccountBalanceWallet';
import AccountBalanceIcon from '@material-ui/icons/AccountBalance';

export default function NavTabs(){


    return(
        <div>
            <div className="Navbar">
                <ul>
                    <li><Link to="Account"><AddCircleIcon /></Link></li>
                    <li><Link to="/Account/balance"><AccountBalanceWalletIcon /></Link></li>
                    <li><Link to="/Account/Ongoing"><AccountBalanceIcon /> </Link></li>
                </ul>
            </div>
        </div>
    )
}