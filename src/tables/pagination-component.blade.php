<div>
    @if ($hasPages == true)
    <nav class="d-inline-block">
        <ul class="pagination mb-0">

            <!-- previous page -->
            <li class="page-item {{ $firstPage == true ? 'disabled' : '' }}" wire:loading.attr="disabled">
                <a class="page-link" href="#" wire:click="{{ $prevPageClick }}" tabindex="-1">
                    <i class="fas fa-chevron-left"></i>
                </a>
            </li>
            <!-- /previous page -->
            
            @if($currentPage + 2 <= $totalPages)
                @for($i = 0; $i < 3 ; $i++)                    
                <li class="page-item {{ $i == 0 ? 'active' : '' }}">
                    <a class="page-link" href="#" wire:click="gotoPage({{ $currentPage + $i }})" >{{ $currentPage + $i }}</a>
                </li>                    
                @endfor
            @else 
                @for($i = $totalPages - 2; $i <= $totalPages ; $i++)
                    @if($i > 0)
                    <li class="page-item {{ $currentPage == $i ? 'active' : '' }}">
                        <a class="page-link" href="#" wire:click="gotoPage({{ $i }})" >{{ $i }}</a>
                    </li>
                    @endif
                @endfor
            @endif                      

            <li class="page-item {{ $morePages == false ? 'disabled' : '' }}" wire:loading.attr="disabled">
                <a class="page-link" wire:click="{{ $nextPageClick }}"  href="#">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </li>
            <!-- /next page -->
        </ul>
    </nav>
    @endif
</div>    