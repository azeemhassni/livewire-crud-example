<style>
    ul li {
        display: grid;
        grid-template-columns: 3fr 1fr
    }
</style>
<a href="/jobs/create">Add New</a>
<ul>
    @foreach($jobs as $job)
        <li>
            <div>
                <h4>{{ $job->name }}</h4>
                <p>{{ $job->body }}</p>
            </div>
            <div>
                <a href="/jobs/{{ $job->id }}">Edit</a>
            </div>
        </li>
    @endforeach
</ul>
