# Faminga Job Management System

This document explains how to use the job posting and application system in the Faminga Theme.

## Features

- Custom post type for job listings
- Taxonomies for categorizing jobs by location, skills, and opportunity type
- Custom fields for job status, job type, application URL, and deadline
- Job application form for candidates
- Admin interface for managing job applications
- Filtering and search functionality for job listings
- Responsive design for all devices

## Adding and Managing Jobs

### Creating a New Job Posting

1. In your WordPress admin, go to **Jobs > Add New**
2. Enter the job title and description in the main editor
3. Add a featured image (optional but recommended)
4. Set job details in the "Job Details" meta box:
   - **Job Status**: Open, Closed, or Coming Soon
   - **Job Type**: Full Time, Part Time, Contract, Internship, or Volunteer
   - **Application URL**: External application URL (optional - if not provided, the internal application form will be used)
   - **Application Deadline**: Set a deadline for applications (optional)
5. Select or add a **Location** from the "Locations" taxonomy
6. Select or add **Skills** from the "Skills" taxonomy
7. Select an **Opportunity Type** from the "Opportunity Types" taxonomy (Open Position, Internship, or Volunteer)
8. Publish the job posting

### Managing Existing Jobs

- To edit a job, go to **Jobs > All Jobs** and click on the job title
- To change the job status from open to closed, edit the job and change the "Job Status" field
- To delete a job, go to **Jobs > All Jobs**, hover over the job title, and click "Trash"

### Viewing Job Applications

1. Go to **Jobs > Applications** to see all job applications
2. Click "View Details" to see full application information
3. You can update the application status and add admin notes
4. Filter applications by job or status using the dropdown filters

## Setting Up Job Categories

### Opportunity Types

The theme creates three default opportunity types:
- Open Position
- Internship
- Volunteer

These are used to organize jobs on the Career page. You can manage these at **Jobs > Opportunity Types**.

### Locations

The theme creates default locations:
- Kigali, Rwanda
- Remote
- Hybrid

You can add more locations at **Jobs > Locations**.

### Skills

The theme creates several default skills relevant to your industry. You can manage these at **Jobs > Skills**.

## Job Application Process

When applicants apply for a job:

1. If you provided an **Application URL**, they will be directed to that external site
2. If no URL is provided, they will use the built-in application form
3. Applications are stored in the database and can be managed in the admin area
4. You'll receive an email notification for each new application

## Customizing the Job Listings

The job listings appear on the Career page, which is automatically created when the theme is activated. The page is organized into three sections:

1. Open Positions
2. Internships 
3. Volunteer & Climate Impact

Each section displays jobs from the corresponding opportunity type category.

## Troubleshooting

- If job applications aren't being saved, check your database connection
- If email notifications aren't being sent, verify your WordPress email settings
- If the application form isn't displaying, make sure the Job Application page exists and uses the correct template
- If locations, skills, or opportunity types aren't showing, try re-saving the permalinks settings 