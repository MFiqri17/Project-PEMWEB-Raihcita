<div style="margin-top: 150px; padding-bottom: 85px;" class="row justify-content-center pagination" >
    @if ($paginator->lastPage() > 1)
    <div class="col-sm-4 text-end">
    <a href="{{ $paginator->url($paginator->currentPage()-1) }}">
      <svg xmlns="http://www.w3.org/2000/svg" width="41.2" height="41.2" fill="currentColor" class="bi bi-caret-left-fill " style="color: #ffff !important; " viewBox="0 0 16 16">
        <path class="text-end" d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
      </svg>
    </a>
    </div>
    <div class="col-sm-4">
    <a href="{{ $paginator->url($paginator->currentPage()+1) }}">
      <svg xmlns="http://www.w3.org/2000/svg" width="41.2" height="41.2" fill="currentColor" class="bi bi-caret-right-fill" style="color: #ffff !important; " viewBox="0 0 16 16">
        <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
      </svg>
    </a>
    </div>
    @endif
</div>

