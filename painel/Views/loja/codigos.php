<?php if (isset($_SESSION['emblema']) && !empty($_SESSION['emblema']) && isset($_SESSION['emblema_tipo']) && !empty($_SESSION['emblema_tipo'])) : ?>
    <div class="alert alert-<?php echo $_SESSION['emblema_tipo']; ?> alert-dismissible fade show" role="alert">
        <?php echo $_SESSION['emblema']; ?>
        <a href="#" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </a>
    </div>

    <?php 
        unset($_SESSION['emblema']);
        unset($_SESSION['emblema_tipo']);
    ?>
<?php endif; ?>
<div class="card">
    <h5 class="card-header">Códigos de Euros</h5>
    <div class="card-body">
        <a href="<?php echo BASE; ?>loja/addCodigo" class="btn btn-outline-dark btn-block">Adicionar Código</a><br/>
        <table class="table table-hover table-responsive">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Restantes</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $item) : ?>
                    <tr>
                        <td><?php echo $item['codigo']; ?></td>
                        <td><?php echo($item['is_limited'] == 1)?'Ilimitado':$item['limite']; ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="<?php echo BASE; ?>loja/editCodigo/<?php echo $item['id']; ?>" class="btn btn-success">Editar</a>
                                <a href="<?php echo BASE; ?>loja/delCodigo/<?php echo $item['id']; ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<style>
    .table-responsive {
        display: table;
    }

    @media only screen and (max-width:520px) {
        .table-responsive {
            display: block;
        }
    }
</style>