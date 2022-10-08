import React, {Component} from 'react';


export default class User extends Component{
    constructor(){
        super()
        this.state= {
            isLoggedIn: false,
            user: [],
            userData: {}
        }
    }

    // check if user is authenticated and storing authentication data as states if true

    
    componentDidMount() {
       axios.get('user').then(res=>{
           this.setState({user:res.data})
       })
      }
      render(){
          
          return(
            <h1 >{this.state.user.map((user)=>{return (user.id)})}
                </h1>
          )
      }
}