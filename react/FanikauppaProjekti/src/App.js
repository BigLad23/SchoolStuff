import './App.css';

import React, { useState } from 'react';
import { Products } from './components/products.js';
import { productData } from './components/productsData.js';
import { Cart } from './components/cart.js';


function App() {
  const [cartItems, setCartItems] = useState([]);

  const onAdd = (product) => {
    const exist = cartItems.find((i) => i.id === product.id);
    if (exist) {
      setCartItems(
        cartItems.map((i) =>
          i.id === product.id ? { ...exist, amount: exist.amount + 1 } : i
        )
      );
    } else {
      setCartItems([...cartItems, { ...product, amount: 1 }]);
    }
  };
  const clearCart = () => {
    setCartItems([]);
  };
  const onRemove = (product) => {
    const exist = cartItems.find((i) => i.id === product.id);
    if (exist.amount === 1) {
      setCartItems(cartItems.filter((i) => i.id !== product.id));
    } else {
      setCartItems(
        cartItems.map((i) =>
          i.id === product.id ? { ...exist, amount: exist.amount - 1 } : i
        )
      );
    }
  }

  return (
    <div className="App">
      <header className="App-header">
        <h2>Fanikauppa</h2>
      </header>
      <div className="Products">
      <Cart cartItems={cartItems} onAdd={onAdd} onRemove={onRemove} clearCart={clearCart} />
         <Products products={productData} onAdd={onAdd} />
      </div>
    </div>
  );
}

export default App;
