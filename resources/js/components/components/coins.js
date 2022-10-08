import React from 'react';
import '../../../css/stockprice.css';
import Menu from '@material-ui/core/Menu';
import MenuItem from '@material-ui/core/MenuItem';
import MoreVertIcon from '@material-ui/icons/MoreVert';
import {Link} from 'react-router-dom';
import Button from '@material-ui/core/Button';
 
export default function Account()

{
  const [anchorEl, setAnchorEl] = React.useState(null);

  const handleClick = (event) => {
    setAnchorEl(event.currentTarget);
  };

  const handleClose = () => {
    setAnchorEl(null);
  };
  
    return(
        <div className="mother">
            <div className="Container_available">
              <h2>Available Product</h2>
              <ul>
                <li><div><img src="./images/btc.webp" alt='coin'/><p>bitcoin</p></div><div><MoreVertIcon  aria-controls="simple-menu" aria-haspopup="true" onClick={handleClick}/>
              
                </div></li>
                <li><div><img src="./images/ETH.webp" alt='coin'/><p>ethereum</p></div><div><MoreVertIcon  aria-controls="simple-menu" aria-haspopup="true" onClick={handleClick}/>
               
                  </div></li>
                <li><div><img src="./images/litecoin.webp" alt='coin'/><p>litecoin</p></div><div><MoreVertIcon  aria-controls="simple-menu" aria-haspopup="true" onClick={handleClick}/>
                     </div></li>
               
                </ul></div> <Menu
        id="simple-menu"
        anchorEl={anchorEl}
        keepMounted
        open={Boolean(anchorEl)}
        onClose={handleClose}
      >
        <MenuItem onClick={handleClose}><a href="/dashboard">View currency price</a></MenuItem>
        <MenuItem onClick={handleClose}><Link to="/Coined">Invest now</Link></MenuItem>
      </Menu>
                <div className="Container_available available_image"><img src="./images/about.png" alt="about" /><div>Earn massive income from paybitFX</div></div>
              
        </div>
    )
}