import React, {Component} from 'react';
import axios from 'axios';

class PartnerSummary extends Component{
    constructor(props){
        super(props);
        this.state = {
            business_name:"",
            business_desc:"",
            isReady:false,
        }
    }

    getPartnerData(){
        axios.post('/partner/partner_account').then(response=>{
            this.setState({
                business_name:response.data.business_name,
                business_desc:response.data.business_desc,
                isReady:true,
            });
        });
    }

    componentWillMount(){
        this.getPartnerData();
    }

    render(){
        if(this.state.isReady === true){
            return(
                <div className="card my-2">
                    <div className="card-body">
                        <h1 className="card-title">{this.state.business_name}</h1>
                        <div className="form-group">
                        <label htmlFor="business_desc">Summary</label>
                            <textarea name="business_desc" id="business_desc" cols="30" rows="10" className="form-control" placeholder="Enter Description">{this.state.business_desc}</textarea>
                        </div>
                    </div>
                </div>
            );
        }else{
            return(
                <div>
                    Loading
                </div>
            )
        }
    }
}

export default PartnerSummary;