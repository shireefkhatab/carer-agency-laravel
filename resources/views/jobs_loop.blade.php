


$jobs = array (
    {
        id: 1,
        title: 'First',
        description: something about the job,
        salary: 1000,
        location: '1 main st, california, usa',
        image_src: '/images/jobs/first.jpg',
        keywords: ['Developer', 'Designer', 'Engneer']
    },
    {
        id: 2,
        title: 'Second',
        description: something about the job,
        salary: 1000,
        location: '1 main st, california, usa',
        image_src: '/images/jobs/first.jpg',
        keywords: ['Developer', 'Designer', 'Engneer']
    },
    {
        id: 3,
        title: 'Third',
        description: something about the job,
        salary: 1000,
        location: '1 main st, california, usa',
        image_src: '/images/jobs/first.jpg',
        keywords: ['Developer', 'Designer', 'Engneer']
    },
    {
        id: 4,
        title: 'Fourth',
        description: something about the job,
        salary: 1000,
        location: '1 main st, california, usa',
        image_src: '/images/jobs/first.jpg',
        keywords: ['Developer', 'Designer', 'Engneer']
    },
    {
        id: 5,
        title: 'Fifth',
        description: something about the job,
        salary: 1000,
        location: '1 main st, california, usa',
        image_src: '/images/jobs/first.jpg',
        keywords: ['Developer', 'Designer', 'Engneer']
    },
    {
        id: 6,
        title: 'Sixth',
        description: something about the job,
        salary: 1000,
        location: '1 main st, california, usa',
        image_src: '/images/jobs/first.jpg',
        keywords: ['Developer', 'Designer', 'Engneer']
    },
    {
        id: 7,
        title: 'Seventh',
        description: something about the job,
        salary: 1000,
        location: '1 main st, california, usa',
        image_src: '/images/jobs/first.jpg',
        keywords: ['Developer', 'Designer', 'Engneer']
    },
    {
        id: 8,
        title: 'Eighth',
        description: something about the job,
        salary: 1000,
        location: '1 main st, california, usa',
        image_src: '/images/jobs/first.jpg',
        keywords: ['Developer', 'Designer', 'Engneer']
    },
    {
        id: 9,
        title: 'Ninth',
        description: something about the job,
        salary: 1000,
        location: '1 main st, california, usa',
        image_src: '/images/jobs/first.jpg',
        keywords: ['Developer', 'Designer', 'Engneer']
    },
    {
        id: 10,
        title: 'Tenth',
        description: something about the job,
        salary: 1000,
        location: '1 main st, california, usa',
        keywords: ['Developer', 'Designer', 'Engneer']
    }

      
]



@for ($i = 1; $i < 11; $i++)
    <div> 
    
    $job = $jobs['$i'];
        <h1>{{ $job['title'] }}</h1>
        <p>{{ $job.description }}</p>
        <p> {{$job.salary}} </p>
        <p>{{ $job.location }}</p>
        <img src='images/{{$job.id}}' alt='{{$job.title}}' />
        <p> {{$job.salary}} </p>
    </div>
@endfor