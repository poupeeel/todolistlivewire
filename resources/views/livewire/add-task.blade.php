<div>
    <h3 class="text-center">add new task</h3>
<form class=""action="">
    <input type="text" class="form-control mb-2" wire:model.live="task">

    <div class="text-center">
        <input type="submit" value="ajouter" wire:click.prevent="addTask" class="btn btn-primary w-25 ">
    </div>

</form>
</div>
