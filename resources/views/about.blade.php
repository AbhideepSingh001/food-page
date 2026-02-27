
    {{-- Header Include --}}
    @include('include.head')
    @section('title', 'About')

<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

/* Section */
.menu-section {
    padding: 70px 8%;
    background: #f7f7f7;
}

/* Header */
.menu-header {
    text-align: center;
    margin-bottom: 50px;
}

.menu-header h1 {
    font-size: 40px;
    margin-bottom: 15px;
}

.menu-header p {
    color: #555;
    font-size: 16px;
    max-width: 700px;
    margin: auto;
}

/* Grid */
.menu-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 35px;
}

/* Item Card */
.menu-item {
    background: #fff;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

/* Images */
.item-images {
    display: flex;
    overflow-x: auto;
}

.item-images img {
    min-width: 100%;
    height: 230px;
    object-fit: cover;
}

/* Body */
.item-body {
    padding: 22px;
}

.item-body h3 {
    font-size: 22px;
    margin: 10px 0;
}

.desc {
    font-size: 14px;
    color: #555;
    margin-bottom: 12px;
}

/* Details */
.details {
    list-style: none;
    margin-bottom: 15px;
}

.details li {
    font-size: 13px;
    margin-bottom: 6px;
}

/* Badge */
.badge {
    display: inline-block;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 12px;
    color: #fff;
}

.badge.veg {
    background: green;
}

.badge.nonveg {
    background: #c0392b;
}

/* Footer */
.item-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.price {
    font-size: 20px;
    font-weight: bold;
    color: #ff6600;
}

button {
    background: #ff6600;
    color: #fff;
    border: none;
    padding: 10px 18px;
    border-radius: 8px;
    cursor: pointer;
}

button:hover {
    background: #e65c00;
}
</style>
<body>
    {{-- Header Include --}}
    @include('partials.header')


    <section class="menu-section">

        <div class="menu-header">
            <h1>Our Special Menu</h1>
            <p>
                A perfect blend of taste, quality, and freshness.
                Explore our wide range of dishes crafted with love.
            </p>
        </div>

        <div class="menu-grid">

            <!-- ITEM 1 -->
            <div class="menu-item">
                <div class="item-images">
                    <img src="https://images.unsplash.com/photo-1631515243349-e0cb75fb8d3a">
                    <img src="https://images.unsplash.com/photo-1599043513900-ed6fe01d3833">
                    <img src="https://images.unsplash.com/photo-1600628422019-9a2f5c5b47da">
                </div>

                <div class="item-body">
                    <span class="badge nonveg">Non-Veg</span>
                    <h3>Hyderabadi Chicken Biryani</h3>

                    <p class="desc">
                        Long-grain basmati rice cooked with tender chicken,
                        slow-cooked on dum with royal spices.
                    </p>

                    <ul class="details">
                        <li>✔ Authentic Hyderabadi taste</li>
                        <li>✔ Served with raita & salad</li>
                        <li>✔ Rich aroma & flavor</li>
                    </ul>

                    <div class="item-footer">
                        <span class="price">₹280</span>
                        <button>Order Now</button>
                    </div>
                </div>
            </div>

            <!-- ITEM 2 -->
            <div class="menu-item">
                <div class="item-images">
                    <img src="https://images.unsplash.com/photo-1548365328-9f547fb0953e">
                    <img src="https://images.unsplash.com/photo-1601924582975-7d36e8c1e7f3">
                    <img src="https://images.unsplash.com/photo-1594007654729-407eedc4be65">
                </div>

                <div class="item-body">
                    <span class="badge veg">Veg</span>
                    <h3>Cheese Burst Pizza</h3>

                    <p class="desc">
                        Loaded with mozzarella cheese, fresh veggies,
                        and baked to golden perfection.
                    </p>

                    <ul class="details">
                        <li>✔ Extra cheese layers</li>
                        <li>✔ Oven baked crust</li>
                        <li>✔ Chef special recipe</li>
                    </ul>

                    <div class="item-footer">
                        <span class="price">₹399</span>
                        <button>Order Now</button>
                    </div>
                </div>
            </div>

            <!-- ITEM 3 -->
            <div class="menu-item">
                <div class="item-images">
                    <img src="https://images.unsplash.com/photo-1550547660-d9450f859349">
                    <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd">
                    <img src="https://images.unsplash.com/photo-1617196034183-421b4917c92d">
                </div>

                <div class="item-body">
                    <span class="badge veg">Veg</span>
                    <h3>Classic Veg Burger</h3>

                    <p class="desc">
                        Crispy patty layered with lettuce, tomato,
                        and our homemade special sauce.
                    </p>

                    <ul class="details">
                        <li>✔ Fresh buns</li>
                        <li>✔ Crispy vegetable patty</li>
                        <li>✔ Rich in taste</li>
                    </ul>

                    <div class="item-footer">
                        <span class="price">₹149</span>
                        <button>Order Now</button>
                    </div>
                </div>
            </div>

            <!-- ITEM 4 -->
            <div class="menu-item">
                <div class="item-images">
                    <img src="https://images.unsplash.com/photo-1621996346565-e3dbc646d9a9">
                    <img src="https://images.unsplash.com/photo-1603133872878-684f208fb84b">
                    <img src="https://images.unsplash.com/photo-1598866594230-a7c12756260f">
                </div>

                <div class="item-body">
                    <span class="badge veg">Veg</span>
                    <h3>Creamy White Sauce Pasta</h3>

                    <p class="desc">
                        Smooth creamy sauce blended with vegetables
                        and Italian herbs for rich flavor.
                    </p>

                    <ul class="details">
                        <li>✔ Creamy & cheesy</li>
                        <li>✔ Italian herbs</li>
                        <li>✔ Chef recommended</li>
                    </ul>

                    <div class="item-footer">
                        <span class="price">₹229</span>
                        <button>Order Now</button>
                    </div>
                </div>
            </div>

        </div>
    </section>
{{-- Footer Include --}}
@include('partials.footer')
</body>

</html>