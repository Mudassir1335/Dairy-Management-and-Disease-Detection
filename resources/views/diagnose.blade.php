<body style="background-color: black; display: flex; justify-content: center; align-items: center; height: 100vh;">
    <div style="
    font-size: 30px;
">
        <h2 style="color: white; text-align: center;">Diagnosis Result</h2>

        @if($diseases->isEmpty())
            <p style="color: white; text-align: center;">No diseases found.</p>
        @else
            <p style="color: white; text-align: center;">Expected diseases:</p>
            <ul style="text-align: center;">
                @foreach($diseases as $disease)
                    <li style="color: white;">{{ $disease->disease_name }}</li>
                @endforeach
            </ul>
        @endif
        
    </div>
</body>
