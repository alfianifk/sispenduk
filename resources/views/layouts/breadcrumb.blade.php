<div class="col-12 col-md-6 order-md-2 order-first">
    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
        <ol class="breadcrumb">
            @if($title == 'Dashboard')
                <li class="breadcrumb-item active" aria-current="page">{{ $title }} /</li>
            @else
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
            @endif
        </ol>
    </nav>
</div>