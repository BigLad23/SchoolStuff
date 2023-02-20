import React from 'react';
const ProductsList = (props) => {
    const { product, onAdd } = props;
    return (
        <div className="product">
            <div className="product-details">
                <h2>{product.name}</h2>
                <h3 className="product-price"> {product.price}€</h3>
                <p>{product.description}</p>

                <button onClick={() => onAdd(product)}>Add to cart</button>
                <div className="product-image">
                    <img src={product.image} alt={product.name} height="300" />
                </div>

            </div>
        </div>

    )
}

const Products = (props) => {
    const { products, onAdd } = props;
    return (
        <div className="products">
            {products.map(product => <ProductsList key={product.id} category={product.category} product={product} onAdd={onAdd} />)}
        </div>
    )
}


export { ProductsList, Products };