import React from 'react';

class Articles extends React.Component {
    
    constructor(props) {

        super(props);
        this.state = {
            cart: [],
            cartLen: null,
            elemchecked: new Map(),
        };
        this.addToCart = this.addToCart.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);

    }

    handleSubmit(e) {
        e.preventDefault();
        let forma = e.target;
          
        let articleIds = [];

        for(let i=0;i<forma.length-1;i++){

            if(forma[i].checked === true){

                articleIds.push(forma[i].value);

            }

        }

        console.log(this.props);

        let username = this.props.authUser ? this.props.authUser.name : document.getElementById("username").value;
        let address = this.props.authUser ? this.props.authUser.address : document.getElementById("address").value;
        let token = document.querySelector("meta[name='csrf-token']").getAttribute("content");

        let url = "/article/store";
        $.ajax({
            url: url,
            type: "POST",
            data: {_token: token, articleIds: articleIds, username: username, address: address, ifRegistred: this.props.authUser ? this.props.authUser.id : null, },
            dataType: "JSON",
    
            success: (response) => { 

                console.log("success");
                //console.log(response);  
                $("#myModal").modal("hide"); 

                this.setState({
                    cart: null,
                    cartLen: null,
                });
                
            },
            error: (response) => {

                console.log("error");
                console.log(response);
                
            }

        });
        
    }

    addToCart(e, item){
        e.preventDefault();
        
        this.setState({
            cart: [...this.state.cart, item],
            cartLen: this.state.cart.length+1,
        });

    }

    render(){
        console.log(this.props);
        let data = this.props.articlesData ? this.props.articlesData.map((item, i) => {

            return <div key={i} className="col-md-4 text-center">
                <div className="menu-wrap">
                    <a href="#" className="menu-img img mb-4" style={{ backgroundImage: `url(storage/images/`+item.thumbnail+`)`}}></a>;
                        <div className="text">
                            <h3><a href="#">{item.title}</a></h3>
                            <p>{item.body.substring(0, 60)}</p>
                            <p className="price"><span>{"$"+item.price}</span></p>
                            <p><a href="#" className="btn btn-white btn-outline-white" onClick={(e) => this.addToCart(e, item)}>Add to cart</a></p>
                        </div>
                </div>
            </div>;

        }) : null;

        let checkboxes = this.state.cart ? this.state.cart.map((item, i) => {

            return <div key={i}>
                <label>
                    <input id={"cart"+i} name={"cart"+i} type="checkbox" value={item.id} defaultChecked/>
                    {item.title}
                </label><br/>
          </div>;

        }) : null;

        return (
  
            <div>
                <div id="cart" data-toggle="modal" data-target="#myModal">
                    <i className="icon-cart-plus" id="cart-ico">
                        <span className='badge badge-warning' id='bedz'>{this.state.cartLen}</span>
                    </i>
                </div>
                <div className="tab-content ftco-animate" id="v-pills-tabContent">
                    <div className="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                        <div className="row">
                            
                            {data}
                            
                        </div>
                    </div>
                </div>

                
                <div className="modal" id="myModal">
                    <div className="modal-dialog">
                        <div className="modal-content">

                        <div className="modal-header">
                            <h4 className="modal-title">Modal Heading</h4>
                            <button type="button" className="close" data-dismiss="modal">&times;</button>
                        </div>

                        <div className="modal-body">
                            
                            <form id="cartForm" onSubmit={this.handleSubmit}>
                                {checkboxes}

                                <label>
                                    <input type="text" name="username" id="username" defaultValue={this.props.authUser ? this.props.authUser.name : ""}/>
                                    username
                                </label>
                                <label>
                                    <input type="text" name="address" id="address"  defaultValue={this.props.authUser ? this.props.authUser.address : ""}/>
                                    address
                                </label>
                                <br/><button type="submit" className="btn btn-primary">Submit</button>
                            </form>

                        </div>

                        <div className="modal-footer">
                            <button type="button" className="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                        </div>
                    </div>
                </div>

            </div>
            
        );
    
    }

}

export default Articles;