import React, { useState } from 'react';
const Cart = (props) => {
    const { cartItems, onAdd, onRemove, clearCart } = props;
    const itemsPrice = cartItems.reduce((a, b) => a + b.amount * b.price, 0);
    const [showForm, setShowForm] = useState(false);
    return (
        <div className="cart">
            <h2>Ostoskori</h2>
            {cartItems.length === 0 && <div>Ostoskori on tyhjä</div>}
            {cartItems.map((item) => (
                <div key={item.id} className="row">
                    <div className="col-2">{item.name}</div>
                    <div className="col-2">
                        <button onClick={() => onAdd(item)} className="add">+</button>
                        <button onClick={() => onRemove(item)} className="remove">-</button>
                    </div>
                    <div className="col-2 text-right">
                        {item.amount} x {item.price.toFixed(2)}€

                    </div>
                </div>
            ))}
            
            {cartItems.length !== 0 && (
                <div>
                    <button onClick={() => clearCart()}>Tyhjennä ostoskori</button>
                    <hr></hr>
                    <div>
                        <h3>Tuotteiden hinta</h3>
                        <div>{itemsPrice.toFixed(2)}€</div>
                        <button onClick={() => setShowForm(!showForm)}>{showForm ? "Peruuta tilaus":"Vahvista tilaus"}</button>
                        {showForm && <form>
                            <div>
                                <label>Nimi</label>
                                <input type="text" required/>
                            </div>
                            <div>
                                <label>Puhelinnumero</label>
                                <input type="number" required/>
                            </div>
                            <div>
                                <label>Osoite</label>
                                <input type="text" id="osoite" required/>
                            </div>
                            <div>
                                <label>Postinumero</label>
                                <input type="number" id="posti" required/>
                            </div>
                            <div>
                                <label>Postitoimipaikka</label>
                                <input type="text" id="place" required/>
                            </div>
                            <button type="submit" onClick={() => alert("Kiitos tilauksestasi! Tilasit nämä tuotteet: " + JSON.stringify(cartItems.map(item => (item.amount + " x " + item.name)))  + ". Tilaamasi tuotteet toimitetaan tähän osoitteeseen: " + document.getElementById("osoite").value + ", "+ document.getElementById("posti").value + " " + document.getElementById("place").value )}>Tilaa</button>
                        </form> }
                    </div>
                    <hr />
                </div>
            )}
        </div>
    );
}

export { Cart };