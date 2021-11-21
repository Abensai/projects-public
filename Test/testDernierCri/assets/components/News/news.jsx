import React, { Component, useEffect } from "react";
import { getFullNews, getDetailsNews } from "./hooks";
import {Routes, Route, Link, useParams} from "react-router-dom";

const dateFormat = {
    dateStyle: 'medium',
    timeStyle: 'short'
}
const NewsTitle = React.memo(({news}) => {
    const link = <Link to={`/news/${news.id}`}>{news.title}</Link>
    return <div className="row">
        <h4 key={news.id} className="col-sm-3">
            {link}
        </h4>
    </div>
})
function PageTitle ({count}) {
    return <h3>{count} Actualité{count > 1 ? 's' : 'e'}</h3>
}
function News () {
    const {items: news, load, loading, count, hasMore} = getFullNews('/api/news')
    
    useEffect(() => {
        load()
    }, [])
    return <div>
        {loading && 'chargement ...'}
        <PageTitle count={count} />
        {news.map(news => <NewsTitle key={news.id} news={news} />)}
        {hasMore && <button className="btn btn-primary" disabled={loading} onClick={load}>charger plus d'actualités</button>}
    </div>
}
function FullNews () {
    const {newsId} = useParams()
    const {title, description, releaseDate, load, loading} = getDetailsNews(`/api/news/${newsId}`)
    const date = new Date(releaseDate)

    useEffect(() => {
        load()
    }, [])
    const linkHome = <Link to={'/'}>Toutes les Actus</Link>

    return <div>
        {loading && 'chargement ...'}
        <h2>{title}</h2>
        <p>{description}</p>
        <strong>{date.toLocaleString(undefined, dateFormat)}</strong><br/><br/>
        {linkHome}
    </div>
}

class NewsElement extends Component {
    render() {
        return (
            <Routes>
                <Route path="/news/:newsId" element={<FullNews />} />
                <Route path="/" element={<News />} />
                <Route render={<h2>Not Found</h2>} />
            </Routes>
        );
    }
}

export default NewsElement;