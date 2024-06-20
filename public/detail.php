<?php
require_once('functions/client-controller.php');
require_once('../admin2/includes/session.php');
$postsControl = new client_controller('../admin2/includes/database_connection.php');
$product = $postsControl->fetchData('products', 'id = ' . $_GET['pro'], null, null)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body class="bg-gray-100 font-serif">
    <!-- header section start -->
    <?php require_once('includes/include-header.php') ?>
    <!-- header section end -->
    <div class="w-[70rem] m-auto mt-8 bg-white">
        <?php
        if ($product) {
            foreach ($product as $rows) {

        ?>
                <div class="flex ">
                    <div class="flex gap-4  p-2">
                        <div>
                            <img class="w-[25rem] h-[25rem]" src="https://i.ibb.co/DDTKcqs/terry-vlisidis-Ws-Ebnsn-Kb-UE-unsplash.jpg" alt="">
                        </div>


                        <div>
                            <h2 class="text-xl">
                                <?php echo $rows['product_title'] ?>
                                <?php
                                foreach ($_SESSION['userData'] as $key => $value) {
                                    echo $login_user_id = $value['username'];
                                }
                                ?>
                            </h2>
                            <div class="flex justify-between mt-4">
                                <div class="flex    ">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                                        </svg>
                                    </span>


                                </div>

                                <div class=" text-gray-400">
                                    <h2>(45) Orders</h2>
                                </div>

                                <div class=" text-gray-400">
                                    <h2>(450) Reviews</h2>
                                </div>
                            </div>
                            <div class="text-gray-400 text-sm mt-6">
                                <h2>Brand:No BrandMore Men Bags from No Brand</h2>
                            </div>
                            <div class="mt-8 text-gray-400">
                                <h2>(45000) Positive reviews</h2>
                            </div>
                            <div class="flex items-center gap-2 border border-green-400 mt-5 bg-green-100 p-2 w-[7rem]">
                                <h2>In Stock</h2>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                                    </svg>

                                </span>

                            </div>
                            <div class="bg-gray-200 p-2 w-[10rem] justify-between rounded bg-opacity-30 border border-gray-300 mt-8 flex">
                                <h2>Cotton Lab BD</h2>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                                </svg>
                            </div>
                        </div>


                    </div>
                    <div class="bg-white border w-[19rem] p-2">
                        <h2>4900$</h2>
                        <div class="flex gap-4 mt-5">
                            <select class="border p-2 w-full rounded" name="" id="">
                                <option value="M">M</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                                <option value="XXXL">XXXL</option>
                            </select>

                            <select class="border p-2 w-full rounded" name="" id="">
                                <option value="Color">Color</option>
                                <option value="Black">Black</option>
                                <option value="Pink">Pink</option>
                                <option value="Gray">Gray</option>
                                <option value="Red">Red</option>
                            </select>
                        </div>
                        <div class="mt-4">
                            <a href="checkout.php?pid=<?php echo $rows['id'] ?>&pn=<?php echo $rows['product_title'] ?>">
                                <button class="bg-blue-300 text-center text-white border p-2 w-full rounded border mb-4">Buy Now</button>
                            </a>
                            <button class="bg-blue-100 text-center text-gray-500 border p-2 w-full rounded border mb-4">Add to cart</button>
                            <button class="bg-blue-50 text-center text-gray-800 border p-2 w-full rounded border mb-4">Add to wishlist</button>

                            <div class="mt-6 rounded items-center border border-gray-400 mt-5 bg-gray-100 p-2 w-[7rem]">
                                <a class="flex gap-2" href="chat/chat.php?c=<?php echo $rows['store_id'] ?>&pro=<?php echo $_GET['pro'] ?>&pn=<?php echo $rows['product_title'] ?>">
                                    <h2>Chat</h2>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
        } else {

            ?>
            <h2>This product is may missing or deleted</h2>
        <?php } ?>
        <div class="bg-white mt-4 p-2">
            <h2 class="text-2xl border-b p-2">
                Specification
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores non pariatur magni similique minus amet veniam vel sint eius aspernatur officiis commodi ab, est veritatis reiciendis! Fuga aliquid atque esse.
                Provident ad doloremque molestias, blanditiis harum ducimus delectus est accusamus repudiandae placeat, quaerat praesentium perspiciatis numquam mollitia culpa quo non dolorum ullam. Iusto, adipisci ducimus consectetur consequatur quod similique ratione.
                Totam unde perferendis ipsa officia atque eligendi accusantium aliquid! Quidem unde eligendi alias modi recusandae nesciunt labore veritatis tempore incidunt eum! Ab ullam est ipsa iusto corporis quia enim doloremque!
                Illo fugiat, ullam nemo modi necessitatibus accusantium quidem facilis, suscipit dignissimos qui nam minus sed eius reiciendis doloribus sequi soluta! Veniam, perferendis fugit. Quam repellat velit cum impedit, corporis minima.
                Sapiente voluptatum maiores ducimus necessitatibus tempora ex rerum minima et. Sequi et soluta consectetur? Dolorum, tempore? Magnam amet dignissimos obcaecati alias. Inventore neque odit veritatis, ut non nobis ipsam facilis!
                Eaque, ut. Rem commodi nulla consectetur incidunt maxime. Est qui magnam quisquam ipsam minus, asperiores ullam illum nobis neque quibusdam eligendi, nulla quia voluptatum officiis architecto consectetur. Pariatur, id tenetur.
                Accusamus ullam voluptas possimus a illum amet eligendi eum dolorem facere, ea deserunt earum, exercitationem ab libero ratione similique dolor, ut sed harum aliquam quam minima excepturi magni? Omnis, itaque.
                Accusamus fugit, distinctio aut cumque recusandae fugiat aperiam perferendis ipsam itaque rerum ipsa atque deserunt? Voluptatem soluta, porro eius ducimus dolores doloremque totam deleniti modi debitis numquam nobis amet accusamus!
                Possimus sunt error rerum veniam. Animi consequatur error necessitatibus? Error, obcaecati eveniet eligendi ipsa placeat iste cupiditate minus odio a voluptas ducimus atque corporis, unde delectus consequatur sapiente architecto. Quo!
                Impedit alias repudiandae libero molestiae distinctio quaerat sequi reprehenderit eveniet voluptatem dolore debitis explicabo, est, laboriosam quasi totam voluptates, quas corrupti. Quod soluta quam quisquam doloremque molestiae officia iusto odit?
            </p>
        </div>
    </div>
</body>

</html>