import React,{Component} from 'react';

class PartnerServicesList extends Component{
    render(){
        return(
        <React.Fragment>
        <div className="form-inline">
            <input type="text mx-1" placeholder="Add Service" className="form-control"/>
            <button className="btn btn-primary mx-1">Add</button>
        </div>
        <div className="m-3">
            <span className="alert alert-primary alert-dismissible fade show m-1" role="alert">
                Service Name
                <button type="button" className="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                </button>
            </span>
        </div>
        </React.Fragment>

        );
    }
}

export default PartnerServicesList;