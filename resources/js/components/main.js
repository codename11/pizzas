import React from 'react';
import ReactDOM from 'react-dom';
import MenuNavbar from './menunavbar.js';

class Index extends React.Component {
    
    constructor(props) {

        super(props);
        this.state = {
            message: "bravo",
        };
        
    }

    render(){

        return (

            <div className="container-fluid">
                <div className="row d-md-flex">
                    <div className="col-lg-4 ftco-animate img f-menu-img mb-5 mb-md-0 stil" style={{ backgroundImage: `url(images/about.jpg)`}}>
                    </div>
                    <div className="col-lg-8 ftco-animate p-md-5">
                        <div className="row">

                            <MenuNavbar/>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        );
    
    }

}

if(document.getElementById('ftco-menu')){

    ReactDOM.render(<Index/>, document.getElementById('ftco-menu'));

}
