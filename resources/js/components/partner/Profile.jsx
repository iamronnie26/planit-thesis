import React, {Component} from "react";
import PartnerSummary from "./PartnerSummary";
import PartnerServices from "./PartnerServices";

class Profile extends Component{

    constructor(props){
        super(props);
        this.state = {
            business_name:"",
            business_desc:"",
            business_services:[],
            isReady:false,
        }
    }
    
    getPartnerData(){
        axios.post('/partner/partner_account').then(response=>{
            this.setState({
                business_name:response.data.account.business_name,
                business_desc:response.data.account.business_desc,
                isReady:true,
            });
        });
    }

    componentWillMount(){
        this.getPartnerData();
    }

    renderContent(){
        let accountSummary= {
            business_name:this.state.business_name,
            business_desc:this.state.business_desc,
            isReady:this.state.isReady,
        }

            return(
                <div className="container">
                    <div className="row justify-content-center">
                        <div className="col-md-8">
                            <PartnerSummary accountSummary={accountSummary}/>
                            <PartnerServices/>
                        </div>
                    </div>
                </div>
        );

    }

    render(){
        if(this.state.isReady === true){
            return this.renderContent();
        }else{
            return "Loading";
        }
    }
}

export default Profile;