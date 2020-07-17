import React from 'react';

class Articles extends React.Component {
    
    constructor(props) {

        super(props);
        this.state = {
            cart: [],
            cartLen: null,
            elemchecked: new Map(),
            total_price: 0,
        };
        this.addToCart = this.addToCart.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
        this.checkCart = this.checkCart.bind(this);

    }

    checkCart(){

        let forma = document.getElementById("cartForm");
          
        let prices = [];
        
        for(let i=0;i<forma.length-1;i++){

            if(forma[i].checked === true){

                prices.push(forma[i].getAttribute("data-price"));
                
            }

        }

        let total_price = 0;
        for(let i=0;i<prices.length;i++){

            
            total_price +=  Number(prices[i]);
            

        }

        this.setState({
            total_price: total_price,
        });
        
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
            total_price: this.state.total_price + Number(item.price),
        });

    }

    render(){
        
        let data = this.props.articlesData ? this.props.articlesData.data.map((item, i) => {

            return <div key={i} className="col-md-4 text-center">
                <div className="menu-wrap">
                    <a href="#" className="menu-img img mb-4" style={{ backgroundImage: `url(../../article_images/beer1.jpg)`}}></a>;
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

            return <div key={i} className="form-check">
                <label className="form-check-label">
                    <input className="form-check-input" id={"cart"+i} name={"cart"+i} type="checkbox" value={item.id} data-price={item.price} defaultChecked onChange={this.checkCart}/>
                    {item.title}
                </label><br/>
          </div>;

        }) : null;

        let form = checkboxes && checkboxes.length === 0 ? "Your basket is empty" : <form id="cartForm" onSubmit={this.handleSubmit}>
                {checkboxes}
                
                <label>
                    <input type="text" placeholder=" username" name="username" id="username" defaultValue={this.props.authUser ? this.props.authUser.name : ""}/>
                </label>
                <br/>
                
                <label>
                    <input type="text" placeholder=" address" name="address" id="address"  defaultValue={this.props.authUser ? this.props.authUser.address : ""}/>   
                </label>
                <br/>

                <button type="submit" className="btn btn-primary">Submit</button>
            </form>;

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
                            <p className="modal-title">Your order:</p>
                            <button type="button" className="close" data-dismiss="modal">&times;</button>
                        </div>

                        <div className="modal-body">
                            
                            {form}
                            <div id="total_price">Total price:</div>

                            <div id="total_price_num">
                                {this.state.total_price}
                            </div>

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