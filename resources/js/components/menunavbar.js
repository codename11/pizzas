import React from 'react';
import Articles from './articles.js';

class MenuNavbar extends React.Component {
    
    constructor(props) {

        super(props);
        this.state = {
            page: null,
            types: [],
            itemType: "pizza",
            itemHrefId: "#v-pills-1",
        };
        this.getClick = this.getClick.bind(this);
        this.listArticles = this.listArticles.bind(this);
        this.testFunk = this.testFunk.bind(this);
    }

    getClick(e){

        let slashLastIndex = e.target.href.lastIndexOf("/");
        this.setState({
            itemType: e.target.innerHTML,
            itemHrefId: e.target.href.substring(slashLastIndex+1, e.target.href.length),
        }, this.listArticles(e.target.innerHTML, null));
        
    }

    listArticles(type, page){
        
        let itemType = type ? type : null;

        $.ajax({
            url: '/articles',
            type: 'GET',
            data: {type: itemType, page: page && parseInt(page) && parseInt(page) > 0  ? page : 1, },
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

    testFunk(page){
        console.log(page);
    }

    componentDidMount(){
        
        document.addEventListener("click", (event) => {
            
            let elem = event.target;
            let tag = event.target.tagName;
            let klasa = event.target.className;
            let href = null;
            let page = null;
            
            if(tag==="A" && klasa==="page-link"){

                event.preventDefault();
                href = elem.href;
                let str = "page=";
                let pos1 = href.indexOf(str);
                page = href.substr(pos1+str.length);

                this.setState({
                    page: page
                }, this.listArticles(null, page));
                console.log(this.state);

            }

            if(tag==="a" && klasa.indexOf("nav-link")>-1){

                $("button[data-toggle=collapse").click();

            }

        });

        //this.listArticles(null,2); define starting page for pagination.
        this.listArticles();

    }
    
    render(){
        //console.log(this.state);
        
        let pagination = <div id="myPagination" className="myPagination" dangerouslySetInnerHTML={{  __html: this.state.pagination}}></div>;
        
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
            <div className="wrapp">

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

                {pagination}

            </div>
            
        );
    
    }

}

export default MenuNavbar;