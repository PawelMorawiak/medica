<footer style="background-color: #f8f9fa; padding: 30px 60px; box-shadow: 0 -2px 6px rgba(0, 0, 0, 0.05); font-family: 'Montserrat', sans-serif;">
    <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap;">
        <h5 style="margin: 0; font-size: 18px; font-weight: 500; color: #333;">
            © {{ date('Y') }} Portal Medyczny
        </h5>

        <div style="display: flex; gap: 30px; margin-top: 10px; flex-wrap: wrap;">
            <a href="{{ url('terms-of-use') }}" style="text-decoration: none; font-size: 16px; color: #333; transition: color 0.3s;">Warunki użytkowania</a>
            <a href="{{ url('about-us') }}" style="text-decoration: none; font-size: 16px; color: #333; transition: color 0.3s;">O nas</a>
            <a href="{{ url('testroute') }}" style="text-decoration: none; font-size: 16px; color: #333; transition: color 0.3s;">Email</a>
            <a href="{{ url('prescriptions') }}" style="text-decoration: none; font-size: 16px; color: #333; transition: color 0.3s;">API</a>
        </div>
    </div>
</footer>