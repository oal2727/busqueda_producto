import React, { useEffect,useState,useCallback } from 'react';
import DataTable from '../../components/DatataTable';
import useItemTableColumns from '../../components/items/ItemTableColumn';
import ItemTableFilters from '../../components/items/itemsTableFilters';
import { Inertia } from '@inertiajs/inertia'
import { router } from '@inertiajs/react'

const Test = ({items,pagination,filters }) => {

    const columns = useItemTableColumns()
    const [filter,setFilter] = useState({
            search:filters.search,
            currentPage: 1,
            perPage: parseInt(pagination.perPage) || 10,
    })
   
    const [{ pageIndex, pageSize }, setPagination] = useState({
        pageIndex: filter.currentPage == 1 ? 0 : filter.currentPage,
        pageSize: 10,
      });
      

    const paginationData = React.useMemo(
        () => ({
          pageIndex,
          pageSize,
        }),
        [pageIndex, pageSize]
    )
      

    function defineUrlWindow(){
        let url = null;
        if(filter.search != null && filter.search != ""){
            url = `${window.location.pathname}?search=${filter.search}&page=${filter.currentPage}&perPage=${filter.perPage}`;
        }else{
            console.log("eliminar")
            url = `${window.location.pathname}?page=${pageIndex+1}&perPage=${filter.perPage}`;
        }
        return url
    }
    
    useEffect(()=>{
        const url = defineUrlWindow()
        Inertia.get(url, {}, { preserveState: true, replace: true })
    },[filter])

    useEffect(()=>{
        handlePaginationChange()
        // defineUrlWindow()
        const url = defineUrlWindow()
        Inertia.get(url, {}, { preserveState: true, replace: true })
    },[paginationData])
    


    
    const handleSearchChange = (e) => {
        setFilter((item)=>( {...item,search:e.target.value}));
    };

   
    const handlePaginationChange = () => {
        const pageData =Math.max(pageIndex - 1, 0)
        console.log(pageData)
        setFilter((item)=>( {...item,currentPage:pageData+1}));
      };

    return (
    <div>
            <h1 className='text-center text-2xl font-bold my-10'>Reporte de Productos:</h1>
            <DataTable
            filters={<ItemTableFilters  onChange={handleSearchChange}/>}
            data={items}
            manualPagination={true}
            pagination={paginationData}
            pageCount={pagination.totalResults}
            columns={columns}
            onPaginate={setPagination}

            />
    </div>
    )
}

export default Test