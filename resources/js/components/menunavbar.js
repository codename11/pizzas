import React from 'react';

class MenuNavbar extends React.Component {
    
    constructor(props) {

        super(props);
        this.state = {
            types: [],
        };
        //this.getCkEditor = this.getCkEditor.bind(this);
        
    }

    render(){
        console.log(this.props.types);

        let menuTabs = this.props.types ? this.props.types.map((item, i) => {

            
            if(i===0){
                return <a key={i} className="nav-link active text-capitalize" id={"v-pills-"+(i+1)+"-tab"} data-toggle="pill" href={"#v-pills-"+(i+1)} role="tab" aria-controls={"v-pills-"+(i+1)} aria-selected="true">{item}</a>
            }
            else{
                return <a key={i} className="nav-link text-capitalize" id={"v-pills-"+(i+1)+"-tab"} data-toggle="pill" href={"#v-pills-"+(i+1)} role="tab" aria-controls={"v-pills-"+(i+1)} aria-selected="false">{item}</a>
            }

        }) : null;
        return (
            <div className="container">

                <div className="col-md-12 nav-link-wrap mb-5">
                    <div className="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                       {menuTabs}
                    </div>
                </div>

            </div>
        );
    
    }

}

export default MenuNavbar;