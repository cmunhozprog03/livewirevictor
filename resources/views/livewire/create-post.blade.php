<div>
    <x-jet-danger-button wire:click="$set('open', true)">
        Criar novo post
    </x-jet-danger-button>

    <x-jet-dialog-modal wire:model="open">

        <x-slot name="title">
            Criar novo post
        </x-slot>

        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label value="Título do post:"/>
                <x-jet-input type="text" class="w-full" wire:model="title" />
                <x-jet-input-error for="title" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Conteúdo:"/>
                <textarea class="form-control w-full" rows="6" wire:model.defer="content"></textarea>
                <x-jet-input-error for="content" />
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open', false)">
                Cancelar
            </x-jet-secondary-button>

            <x-jet-danger-button wire:click="save" wire:loading.attr="disabled" 
                wire:target="save" class="disabled:opacity-25">
                Crear Post
            </x-jet-danger-button>
            
        </x-slot>
    </x-jet-dialog-modal>
</div>
