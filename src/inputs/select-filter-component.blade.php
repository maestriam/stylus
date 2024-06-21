<form>
    <select data-livewire="@this" name="{{ $name ?? '' }}"  class="form-control select2" multiple="">
        {{ $slot }}
    </select>
</form>
