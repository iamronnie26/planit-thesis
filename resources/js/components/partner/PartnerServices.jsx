import React, {Component} from 'react';
import ServicesDataList from './ServicesDataList';
import PartnerServicesList from './PartnerServicesList';

class PartnerServices extends Component{
    render(){
        return(
            <div className="card my-2">
                <div className="card-header">Services Offered</div>
                <div className="card-body">
                        <ServicesDataList/>
                        <PartnerServicesList/>
                </div>
            </div>
        );
    }
}

export default PartnerServices;