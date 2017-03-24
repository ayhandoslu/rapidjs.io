<div class="sidebar">
    <div class="sidebar__inner">
        <a class="sidebar__title" href="#getting-started">Getting Started</a>

        <ul class="sidebar__nav">
            @foreach(config('docs')['getting-started'] as $nav)
                <li><a href="#{{ $nav }}">{{ ucwords(str_replace('-', ' ', $nav)) }}</a></li>
            @endforeach
        </ul>

        {{-- <a class="sidebar__title" href="#relationships">Relationships</a>

        <ul class="sidebar__nav">
            @foreach(['basic-usage' => 'Basic Usage', 'extending' => 'Extending'] as $nav => $name)
                <li><a href="#extending-{{ $nav }}">{{ $name }}</a></li>
            @endforeach
        </ul> --}}

        <a class="sidebar__title" href="#extending-rapid">Extending Rapid</a>

        <ul class="sidebar__nav">
            @foreach(config('docs')['extending-rapid'] as $nav => $name)
                <li><a href="#extending-{{ $nav }}">{{ $name }}</a></li>
            @endforeach
        </ul>

        <a class="sidebar__title" href="#config-builder">Config Builder</a>

        <ul class="sidebar__nav">
            @foreach(['core', 'overrides', 'suffixes', 'methods', 'options', 'routes'] as $nav)
                <li><a href="#config-builder-{{ $nav }}">{{ ucfirst($nav) }}</a></li>
            @endforeach
        </ul>

        <a class="sidebar__title" href="#debugging">Debugging</a>

        <ul class="sidebar__nav">
            @foreach(config('docs')['debugging'] as $nav => $name)
                <li><a href="#extending-{{ $nav }}">{{ $name }}</a></li>
            @endforeach
        </ul>

        <a class="sidebar__title" href="#configuration">Configuration</a>

        <ul class="sidebar__nav">
            @foreach(config('configuration') as $configuration => $data)
                <li><a href="#configuration-{{ $configuration }}">{{ $configuration }}</a></li>
            @endforeach
        </ul>

        <a class="sidebar__title" href="#methods">Methods</a>

        <ul class="sidebar__nav">
            @foreach(config('methods') as $method => $data)
                <li><a href="#method-{{ $method }}">{{ $method }}</a></li>
            @endforeach
        </ul>

    </div>
</div>
