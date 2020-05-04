import React from 'react';
import Articles from './articles.js';

class MenuNavbar extends React.Component {
    
    constructor(props) {

        super(props);
        this.state = {
            types: [],
            itemType: "pizza",
            itemHrefId: "#v-pills-1",
        };
        this.getClick = this.getClick.bind(this);
        this.listArticles = this.listArticles.bind(this);
    }

    getClick(e){

        let slashLastIndex = e.target.href.lastIndexOf("/");
        this.setState({
            itemType: e.target.innerHTML,
            itemHrefId: e.target.href.substring(slashLastIndex+1, e.target.href.length),
        }, this.listArticles(e.target.innerHTML));
        
    }

    listArticles(type){
    
        let itemType = type ? type : null;

        $.ajax({
            url: '/articles',
            type: 'GET',
            data: {type: itemType},
            dataType: 'JSON',
    
            success: (response) => { 

                console.log("success");
                //console.log(response);  
                
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
        
        let itemType = this.state.itemType;

        let types = this.state.types ? this.state.types.filter((item, i) => {
            return this.state.types.indexOf(item) === i;
        }) : null;

        let menuTabs = types ? types.map((item, i) => {

            if(i===0){
                return <a onClick={this.getClick} key={i} className="nav-link active text-capitalize" id={"v-pills-"+(i+1)+"-tab"} data-toggle="pill" href={"#v-pills-"+(i+1)} role="tab" aria-controls={"v-pills-"+(i+1)} aria-selected="true">{item}</a>
            }
            else{
                return <a onClick={this.getClick} key={i} className="nav-link text-capitalize" id={"v-pills-"+(i+1)+"-tab"} data-toggle="pill" href={"#v-pills-"+(i+1)} role="tab" aria-controls={"v-pills-"+(i+1)} aria-selected="false">{item}</a>
            }

        }) : null;

        return (
            <div>

                <div className="container">

                    <div className="col-md-12 nav-link-wrap mb-5">
                        <div className="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        {menuTabs}
                        </div>
                    </div>

                </div>
                <div className="col-md-12 d-flex align-items-center" id="demo">

                    <Articles authUser={this.state.authUser} articlesData={this.state.articles} itemType={itemType}/>

                </div>

            </div>
            
        );
    
    }

}

export default MenuNavbar;