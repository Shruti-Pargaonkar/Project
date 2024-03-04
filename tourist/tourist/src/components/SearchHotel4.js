import React from 'react'
import "./SearchHotel.css"
import keralaHotel4 from '../Assets/Image/keralaHotel4.jpg'

function SearchHotel() {
    const handleClick=()=>{
            
        alert('Your request Accepted and Your room is Booked');
    }
    return (
        <div className='searchItem'>
           <img src={keralaHotel4} alt='keralaHotel4' className='siImg'/>

           <div className='siDesc'>
            <h1 className='siTitle'>Four Points by Sheraton  Infopark</h1>
            <span className='siDistance'>kakkanand</span>
            <span className='siTaxiOp'>Free airport taxi</span>
            <span className='siSubtitle'>Greate location,clean rooms and a pool

            </span>
            <span className='siCancelOp'>Free Cancellation till 24 hrs before checkin</span>
           </div>
           <div className='siDetails'>
            <div className='siRating'>
                <span>Excellent</span>
                <button>7.4</button>
                </div>
                <div className='siDetailTexts'>
                    <span className='siPrice'>INR 6,000</span>
                    <span className='siTaxOp'>Includes taxes and fees</span>
                    <button className='siCheckButton'  onClick={handleClick}>Book</button>
                </div>
                </div>
                
        </div>
    );
};

export default SearchHotel
