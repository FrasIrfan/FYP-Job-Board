
import { useEffect, useState } from 'react'
import { db } from './firebase'
import { collection, getDocs } from 'firebase/firestore'

function ReadJobs() {
  const [jobs, setJobs] = useState([])

  useEffect(() => {
    const fetchJobs = async () => {
      const result = await getDocs(collection(db, 'sample_jobs')) 
      const jobsData = result.docs.map(doc => ({ ...doc.data() }))
      setJobs(jobsData)
    }
    fetchJobs()
  }, [])

  return (
    <div>
      <h2>Jobs from Firestore</h2>
      <pre>{JSON.stringify(jobs, null, 2)}</pre>
    </div>
  )
}

export default ReadJobs
