<?php get_header(); ?>

<main class="container">
    <?php if (have_posts()){
        while (have_posts()){
            the_post();
            ?>
                    <h1 class="my-5"><?php the_title(); ?></h1>
                    <div class="row">
                        <div class="col-6">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                        <div class="col-6">
                            <?php the_content(); ?>
                        </div>
                    </div>
                                 
            <?php
        }
    }?>
     <?php
    include_once "includes/conexion.php";
    $sentencia = $bd -> query("SELECT
    IdProducto,
    Producto,
    DescriProducto,
    ImgProd,
    Precio,
    Fecha,
    Cantidad,
    FechaInv,
    TipoNombre,
    TipoDescri
FROM
    productos,
    actualizacionprecio,
    inventario,
    tipo_producto
WHERE
    IdProducto = IdProd AND IdProducto = IdProduct AND TipoProducto = TipoId;");
    $producto = $sentencia->fetchAll(PDO::FETCH_OBJ);
    
?>

    <div class="lista_productos">
        <div class="row">
            <h2 class="text-center">
                Productos
            </h2>
            <?php
            $idP = 0;
                foreach($producto as $dato){
                   
                    ?>
                    <div class="col-6 item-container">
                        <figure>
                        <img class="imgCatalogo" src="data:image/jpg;base64, <?php echo base64_encode($dato->ImgProd); ?>" alt="">   
                        </figure>
                        <h4 class="my-3">
                            Producto:
                            <?php echo $dato -> Producto; ?>
                        </h4>
                        <p>
                            Descripcion:
                            <?php echo $dato -> DescriProducto; ?>
                        </p>
                        <p>
                            Precio:
                            <?php echo $dato -> Precio; ?>
                        </p>
                        <p>
                            Fecha de actualizacion precio:
                            <?php echo $dato -> Fecha; ?>
                        </p>
                        <p>
                            Existencias:
                            <?php echo $dato -> Cantidad; ?>
                        </p>
                        <p>
                            Fecha de inventario:
                            <?php echo $dato -> FechaInv; ?>
                        </p>
                        <p>
                            Categoria:
                            <?php echo $dato -> TipoNombre; ?>
                        </p>
                        <button type="submit" onclick="handleclick (<?php echo $dato -> IdProducto; ?>)">Ver Detalles</button>
                    </div>
                                  
            <?php
                }
            ?>
        </div>
    </div>
       
</main>

<?php get_footer(); ?>