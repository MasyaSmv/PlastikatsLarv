<div class="col-md-4">
    <div class="card mb-4 shadow-sm">
        <svg class="bd-placeholder-img card-img-top gost-image" xmlns="http://www.w3.org/2000/svg" width="100%" height="225"
            role="img">
            <title>{{ $gost -> gost}}</title>
            <rect width="100%" height="100%" fill="#55595c" /><text x="35%" y="50%" fill="#eceeef"
                dy=".3em">{{ $gost -> gost}}</text>
        </svg>
        <div class="card-body">
            <p class="card-text">{{$gost -> title}}</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a type="button" href="{{route('gosts', [$gost -> id])}}" class="btn btn-sm btn-outline-secondary">View</a>
                    <a type="button" class="btn btn-sm btn-outline-secondary">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>
