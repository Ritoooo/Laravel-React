import React, { Component } from 'react'

const TransferList = ({ transfers }) => (
    <table className="table">
        <tbody>
            {transfers.map((transfer) => {
                return (
                    <tr key={transfer.id}>
                        <td>{transfer.description}</td>
                        <td
                            className={transfer.amount < 0 ? "text-danger" : "text-success"}
                        >
                        {transfer.amount}</td>
                    </tr>
                )
            })}

        </tbody>
    </table>
)

export default TransferList