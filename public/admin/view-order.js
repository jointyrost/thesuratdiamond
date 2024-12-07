document.addEventListener('DOMContentLoaded', function () {
    // Add event listener for all view buttons
    const viewButtons = document.querySelectorAll('.view-btn');
    
    viewButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Get data attributes from the button
            const orderId = this.getAttribute('data-order-id');
            const orderStatus = this.getAttribute('data-order-status');
            const orderTotal = this.getAttribute('data-order-total');
            const orderDate = this.getAttribute('data-order-date');
            
            // Prepare the order items (this can be a dynamic fetch if needed)
            let orderItemsHtml = '';
            const orderItems = {{ json_encode($order->orderItems) }}; // Pass the order items to JS
            
            orderItems.forEach(item => {
                // Assuming the product is loaded as part of order items
                const productName = item.product.name; // Adjust this if the structure is different
                const productType = item.product_type; // Access the product_type from the order item
                const productId = item.product_id; // Access the product_id from the order item
                
                orderItemsHtml += `
                    <div>
                        <strong>Product Name:</strong> ${productName} <br>
                        <strong>Product Type:</strong> ${productType} <br>
                        <a href="/${productType}s/${productId}" class="btn btn-primary">View Product Details</a>
                    </div>
                    <hr>
                `;
            });
            
            // Populate modal body
            document.getElementById('orderItemsContainer').innerHTML = `
                <h6>Order ID: #${orderId}</h6>
                <p><strong>Date:</strong> ${orderDate}</p>
                <p><strong>Status:</strong> ${orderStatus}</p>
                <p><strong>Total:</strong> $${orderTotal}</p>
                <h6>Order Items:</h6>
                ${orderItemsHtml}
            `;
        });
    });
});