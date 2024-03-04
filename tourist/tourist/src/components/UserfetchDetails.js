import axios from 'axios';
import React, { useEffect, useState } from 'react';
import AdminNav from './AdminNav';

export default function UserfetchDetails() {
    const [users, setUsers] = useState([]);

    useEffect(() => {
        userfetchDetails();
    }, []);

    const userfetchDetails = async () => {
        const result = await axios.get("http://localhost:8000/registration/getalluser");
        setUsers(result.data);
    }

    return (
        <div>
            <header><AdminNav /></header>
            <div className='container'>
                <div className='py-4'>
                    <table className="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Number</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Email Id</th>
                                <th scope="col">Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            {
                                users.map((user, index) => (
                                    
                                    user.role === 'USER' && (
                                        <tr key={index}>
                                            <th scope="row">{index + 1}</th>
                                            <td>{user.username}</td>
                                            <td>{user.email}</td>
                                            <td>User</td>
                                        </tr>
                                    )
                                ))
                            }
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    )
}
