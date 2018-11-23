import React, {Component} from "react";
import PartnerSummary from "./PartnerSummary";
import PartnerServices from "./PartnerServices";

class Profile extends Component{
    render(){
        return(
                <div className="container py-4">
                    <div className="row justify-content-center">
                        <div className="col-md-8">
                            <PartnerSummary/>
                            <PartnerServices/>
                        </div>
                    </div>
                </div>
        )
    }
}

export default Profile;