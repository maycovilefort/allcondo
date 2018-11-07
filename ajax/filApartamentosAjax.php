<?php
include('../_app/Config.inc.php');
$filAp = filter_input(INPUT_POST, 'filap');
$Read = new Read;
?>

<select type="text" name="id_ap" class="form-control">
    <option value="0">Selecionar...</option>
    <?php
    $Read->ExeRead("apartamentos", "WHERE id_bl = :id_bl", "id_bl={$filAp}");
    
    if ($Read->getResult()):
        foreach ($Read->getResult() as $Dados):
            extract($Dados);
            ?>
            <option value="<?= $ap_id; ?>"><?= $ap_desc; ?></option>
            <?php
        endforeach;
    endif;
    ?>
</select>