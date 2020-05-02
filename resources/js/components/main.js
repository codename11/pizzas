import React from 'react';
import ReactDOM from 'react-dom';
import MenuNavbar from './menunavbar.js';

class Index extends React.Component {
    
    constructor(props) {

        super(props);
        this.state = {
            message: "bravo",
            
        };
        this.listArticles = this.listArticles.bind(this);

    }

    listArticles(){
        //e.preventDefault();
        //let token = document.querySelector("meta[name='csrf-token']").getAttribute("content");

        $.ajax({
            url: '/articles',
            type: 'GET',
            data: {},
            dataType: 'JSON',
    
            success: (response) => { 

                console.log("success");
                console.log(response);  
                
                this.setState({...response});

    
            },
            error: (response) => {

                console.log("error");
                console.log(response);
                
            }

        });

    }

    componentDidMount(){
        
        this.listArticles();

    }

    render(){
        //console.log(this.state);

        let types = this.state.articles ? this.state.articles.map((item, i) => {

            return item.type;

        }) : null;

        types = types ? types.filter((item, i) => {
            return types.indexOf(item) === i;
        }) : null;
        //console.log(types);
        return (

                <div className="container-fluid">
                    <div className="row d-md-flex">
                        <div className="col-lg-4 ftco-animate img f-menu-img mb-5 mb-md-0 stil" style={{ backgroundImage: `url(images/about.jpg)`}}>
                        </div>
                        <div className="col-lg-8 ftco-animate p-md-5">
                            <div className="row">
                                <MenuNavbar types={types}/>
                                <div className="col-md-12 d-flex align-items-center" id="demo">

                                    

                                </div>
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
