<?php
namespace SAQService;

use SAQService\Types\GetListePays;
use SAQService\Types\SyncGetListePaysDataAreaType;
use SAQService\Types\SyncGetListePaysType;
use SAQService\Types\Pays;
use SAQService\Types\Reference;
use SAQService\Types\SyncGetListePaysResponseType;
use SAQService\Types\SyncGetListePaysResponseDataAreaType;
use SAQService\Types\GetListePrix;
use SAQService\Types\GetListePrixResponse;
use SAQService\Types\Prix;
use SAQService\Types\ReferenceAvecId;
use SAQService\Types\Produit;
use SAQService\Types\Result;
use SAQService\Types\Attribute;
use SAQService\Types\GetProduitsParAccord;
use SAQService\Types\GetProduitsParAccordResponse;
use SAQService\Types\ListeProduit;
use SAQService\Types\ListeResultat;
use SAQService\Types\GetProduits;
use SAQService\Types\GetProduitsResponse;
use SAQService\Types\GetProduitsParMotCle;
use SAQService\Types\GetProduitsParMotCleResponse;
use SAQService\Types\GetDetailRecette;
use SAQService\Types\GetDetailRecetteResponse;
use SAQService\Types\DetailRecette;
use SAQService\Types\Recette;
use SAQService\Types\GetRecettesParAccord;
use SAQService\Types\GetRecettesParAccordResponse;
use SAQService\Types\ListeRecette;
use SAQService\Types\GetListeCategories;
use SAQService\Types\GetListeCategoriesResponse;
use SAQService\Types\Categorie;
use SAQService\Types\GetListeCepages;
use SAQService\Types\GetListeCepagesResponse;
use SAQService\Types\Cepage;
use SAQService\Types\GetSuccursales;
use SAQService\Types\GetSuccursalesResponse;
use SAQService\Types\Succursale;
use SAQService\Types\GetListeTypesPlat;
use SAQService\Types\GetListeTypesPlatResponse;
use SAQService\Types\TypePlat;
use SAQService\Types\Ingredient;
use SAQService\Types\GetListePastilles;
use SAQService\Types\GetListePastillesResponse;
use SAQService\Types\Pastille;
use SAQService\Types\GetRecettes;
use SAQService\Types\GetRecettesResponse;
use SAQService\Types\GetDetailProduitParCUP;
use SAQService\Types\GetDetailProduitParCUPResponse;
use SAQService\Types\GetListePaysResponse;
use SAQService\Types\GetMessage;
use SAQService\Types\GetMessageResponse;
use SAQService\Types\Message;
use SAQService\Types\GetImageURL;
use SAQService\Types\GetImageURLResponse;
use SAQService\Types\GetPromotion;
use SAQService\Types\GetDetailProduit;
use SAQService\Types\GetDetailProduitResponse;
use SAQService\Types\DetailProduit;
use SAQService\Types\GetPromotionResponse;
use SAQService\Types\Promotion;
use SAQService\Types\Contenu;
use SAQService\Types\ProduitPromotion;
use SAQService\Types\IdentiteProduit;
use SAQService\Types\GetLegalInfos;
use SAQService\Types\GetLegalInfosResponse;
use SAQService\Types\LegalInfos;
use SAQService\Types\GetDetailsSuccursale;
use SAQService\Types\GetDetailsSuccursaleResponse;
use SAQService\Types\DetailsSuccursale;
use SAQService\Types\Horaires;
use SAQService\Types\Horaire;
use SAQService\Types\GetProduitsParMotCleV2Response;
use SAQService\Types\ListeProduitV2;
use SAQService\Types\GetDetailProduitParCUPV2Response;
use SAQService\Types\GetDetailProduitV2Response;
use SAQService\Types\DetailProduitV2;
use SAQService\Types\AttributeV2;
use SAQService\Types\GetDetailProduitParCUPV2;
use SAQService\Types\GetDetailProduitV2;
use SAQService\Types\GetProduitsV2;
use SAQService\Types\GetProduitsV2Response;
use SAQService\Types\GetProduitsParAccordV2;
use SAQService\Types\GetProduitsParAccordV2Response;
use SAQService\Types\GetRecettesV2;
use SAQService\Types\GetRecettesParAccordV2;
use SAQService\Types\GetRecettesV2Response;
use SAQService\Types\GetRecettesParAccordV2Response;
use SAQService\Types\ListeRecetteV2;
use SAQService\Types\GetDetailProduitParCUPV3Response;
use SAQService\Types\GetDetailProduitV3Response;
use SAQService\Types\CepageDesc;
use SAQService\Types\AttributeV3;
use SAQService\Types\DetailProduitV3;
use SAQService\Types\GetDetailProduitParCUPV3;
use SAQService\Types\GetDetailProduitV3;
use SAQService\Types\SyncGetDetailProduitDataAreaType;
use SAQService\Types\SyncGetDetailProduitParCUPDataAreaType;
use SAQService\Types\SyncGetDetailProduitType;
use SAQService\Types\SyncGetDetailProduitParCUPType;
use SAQService\Types\SyncGetDetailProduitParCUPResponseDataAreaType;
use SAQService\Types\SyncGetDetailProduitParCUPResponseType;
use SAQService\Types\SyncGetDetailProduitResponseDataAreaType;
use SAQService\Types\SyncGetDetailProduitResponseType;
use SAQService\Types\SyncGetDetailRecetteDataAreaType;
use SAQService\Types\SyncGetDetailRecetteType;
use SAQService\Types\SyncGetDetailRecetteResponseDataAreaType;
use SAQService\Types\SyncGetDetailRecetteResponseType;
use SAQService\Types\SyncGetListeCategoriesDataAreaType;
use SAQService\Types\SyncGetListeCategoriesType;
use SAQService\Types\SyncGetListeCategoriesResponseDataAreaType;
use SAQService\Types\SyncGetListeCategoriesResponseType;
use SAQService\Types\SyncGetListeCepagesDataAreaType;
use SAQService\Types\SyncGetListeCepagesType;
use SAQService\Types\SyncGetListeCepagesResponseDataAreaType;
use SAQService\Types\SyncGetListeCepagesResponseType;
use SAQService\Types\SyncGetListePastillesDataAreaType;
use SAQService\Types\SyncGetListePastillesType;
use SAQService\Types\SyncGetListePastillesResponseDataAreaType;
use SAQService\Types\SyncGetListePastillesResponseType;
use SAQService\Types\SyncGetListePrixDataAreaType;
use SAQService\Types\SyncGetListePrixType;
use SAQService\Types\SyncGetListePrixResponseDataAreaType;
use SAQService\Types\SyncGetListePrixResponseType;
use SAQService\Types\SyncGetListeTypesPlatDataAreaType;
use SAQService\Types\SyncGetListeTypesPlatType;
use SAQService\Types\SyncGetListeTypesPlatResponseDataAreaType;
use SAQService\Types\SyncGetListeTypesPlatResponseType;
use SAQService\Types\SyncGetProduitsDataAreaType;
use SAQService\Types\SyncGetProduitsType;
use SAQService\Types\SyncGetProduitsParAccordDataAreaType;
use SAQService\Types\SyncGetProduitsParAccordType;
use SAQService\Types\SyncGetProduitsParAccordResponseDataAreaType;
use SAQService\Types\SyncGetProduitsParAccordResponseType;
use SAQService\Types\SyncGetProduitsParMotCleDataAreaType;
use SAQService\Types\SyncGetProduitsParMotCleType;
use SAQService\Types\SyncGetProduitsParMotCleResponseDataAreaType;
use SAQService\Types\SyncGetProduitsParMotCleResponseType;
use SAQService\Types\SyncGetProduitsResponseDataAreaType;
use SAQService\Types\SyncGetProduitsResponseType;
use SAQService\Types\SyncGetRecettesDataAreaType;
use SAQService\Types\SyncGetRecettesType;
use SAQService\Types\SyncGetRecettesParAccordDataAreaType;
use SAQService\Types\SyncGetRecettesParAccordType;
use SAQService\Types\SyncGetRecettesParAccordResponseDataAreaType;
use SAQService\Types\SyncGetRecettesParAccordResponseType;
use SAQService\Types\SyncGetRecettesResponseDataAreaType;
use SAQService\Types\SyncGetRecettesResponseType;
use SAQService\Types\SyncGetSuccursalesDataAreaType;
use SAQService\Types\SyncGetSuccursalesType;
use SAQService\Types\SyncGetSuccursalesResponseDataAreaType;
use SAQService\Types\SyncGetSuccursalesResponseType;
use SAQService\Types\SyncGetMessageDataAreaType;
use SAQService\Types\SyncGetMessageType;
use SAQService\Types\SyncGetMessageResponseDataAreaType;
use SAQService\Types\SyncGetMessageResponseType;
use SAQService\Types\SyncGetDetailsSuccursaleDataAreaType;
use SAQService\Types\SyncGetDetailsSuccursaleType;
use SAQService\Types\SyncGetDetailsSuccursaleResponseDataAreaType;
use SAQService\Types\SyncGetDetailsSuccursaleResponseType;
use SAQService\Types\SyncGetProduitsParMotCleV2Type;
use SAQService\Types\SyncGetProduitsParMotCleV2DataAreaType;
use SAQService\Types\SyncGetProduitsParMotCleV2ResponseDataAreaType;
use SAQService\Types\SyncGetProduitsParMotCleV2ResponseType;
use SAQService\Types\SyncGetDetailProduitParCUPV2ResponseDataAreaType;
use SAQService\Types\SyncGetDetailProduitParCUPV2ResponseType;
use SAQService\Types\SyncGetDetailProduitV2ResponseDataAreaType;
use SAQService\Types\SyncGetDetailProduitV2ResponseType;
use SAQService\Types\SyncGetDetailProduitV2DataAreaType;
use SAQService\Types\SyncGetDetailProduitV2Type;
use SAQService\Types\SyncGetDetailProduitParCUPV2Type;
use SAQService\Types\SyncGetDetailProduitParCUPV2DataAreaType;
use SAQService\Types\SyncGetProduitsV2DataAreaType;
use SAQService\Types\SyncGetProduitsV2Type;
use SAQService\Types\SyncGetProduitsV2ResponseDataAreaType;
use SAQService\Types\SyncGetProduitsV2ResponseType;
use SAQService\Types\SyncGetProduitsParAccordV2DataAreaType;
use SAQService\Types\SyncGetProduitsParAccordV2Type;
use SAQService\Types\SyncGetProduitsParAccordV2ResponseDataAreaType;
use SAQService\Types\SyncGetProduitsParAccordV2ResponseType;
use SAQService\Types\SyncGetRecettesV2DataAreaType;
use SAQService\Types\SyncGetRecettesV2Type;
use SAQService\Types\SyncGetRecettesParAccordV2DataAreaType;
use SAQService\Types\SyncGetRecettesParAccordV2Type;
use SAQService\Types\SyncGetRecettesParAccordV2ResponseDataAreaType;
use SAQService\Types\SyncGetRecettesParAccordV2ResponseType;
use SAQService\Types\SyncGetRecettesV2ResponseDataAreaType;
use SAQService\Types\SyncGetRecettesV2ResponseType;
use SAQService\Types\SyncGetDetailProduitParCUPV3ResponseDataAreaType;
use SAQService\Types\SyncGetDetailProduitParCUPV3ResponseType;
use SAQService\Types\SyncGetDetailProduitV3ResponseDataAreaType;
use SAQService\Types\SyncGetDetailProduitV3ResponseType;
use SAQService\Types\SyncGetDetailProduitV3DataAreaType;
use SAQService\Types\SyncGetDetailProduitV3Type;
use SAQService\Types\SyncGetDetailProduitParCUPV3Type;
use SAQService\Types\SyncGetDetailProduitParCUPV3DataAreaType;
use SAQService\Types\SyncGetImageURLDataAreaType;
use SAQService\Types\SyncGetImageURLType;
use SAQService\Types\SyncGetImageURLResponseDataAreaType;
use SAQService\Types\SyncGetImageURLResponseType;
use SAQService\Types\SyncGetPromotionDataAreaType;
use SAQService\Types\SyncGetPromotionType;
use SAQService\Types\SyncGetPromotionResponseDataAreaType;
use SAQService\Types\SyncGetPromotionResponseType;
use SAQService\Types\SyncGetLegalInfosDataAreaType;
use SAQService\Types\SyncGetLegalInfosType;
use SAQService\Types\SyncGetLegalInfosResponseDataAreaType;
use SAQService\Types\SyncGetLegalInfosResponseType;
use SAQService\Types\TypeTri;
use SAQService\Types\GetProduitsParMotCleV2;

/**
 *
 * @author Eric Richer
 *        
 */


class ServiceMobile extends \SoapClient
{

    const SAQSERVICE_URI = 'http://www.saq.com:9300/webapp/wcs/services/ServiceMobile/wsdl/wsdl/SAQ/ServiceMobile.wsdl';
    
    private static $localclassmap =  [
        'getListePrix' => GetListePrix::class, 
        'getListePrixResponse' => GetListePrixResponse::class,
        'prix' => Prix::class,
        'reference' => Reference::class,
        'referenceAvecId' => ReferenceAvecId::class,
        'getDetailProduit' => GetDetailProduit::class,
        'getDetailProduitResponse' => GetDetailProduitResponse::class,
        'detailProduit' => DetailProduit::class,
        'produit' => Produit::class,
        'result' => Result::class,
        'attribute' => Attribute::class,
        'getProduitsParAccord' => GetProduitsParAccord::class,
        'getProduitsParAccordResponse' => GetProduitsParAccordResponse::class,
        'listeProduit' => ListeProduit::class,
        'listeResultat' => ListeResultat::class,
        'getProduits' => GetProduits::class,
        'getProduitsResponse' => GetProduitsResponse::class,
        'getProduitsParMotCle' => GetProduitsParMotCle::class,
        'getProduitsParMotCleResponse' => GetProduitsParMotCleResponse::class,
        'getDetailRecette' => GetDetailRecette::class,
        'getDetailRecetteResponse' => GetDetailRecetteResponse::class,
        'detailRecette' => DetailRecette::class,
        'recette' => Recette::class,
        'getRecettesParAccord' => GetRecettesParAccord::class,
        'getRecettesParAccordResponse' => GetRecettesParAccordResponse::class,
        'listeRecette' => ListeRecette::class,
        'getListeCategories' => GetListeCategories::class,
        'getListeCategoriesResponse' => GetListeCategoriesResponse::class,
        'categorie' => Categorie::class,
        'getListeCepages' => GetListeCepages::class,
        'getListeCepagesResponse' => GetListeCepagesResponse::class,
        'cepage' => Cepage::class,
        'getSuccursales' => GetSuccursales::class,
        'getSuccursalesResponse' => GetSuccursalesResponse::class,
        'succursale' => Succursale::class,
        'getListeTypesPlat' => GetListeTypesPlat::class,
        'getListeTypesPlatResponse' => GetListeTypesPlatResponse::class,
        'typePlat' => TypePlat::class,
        'ingredient' => Ingredient::class,
        'getListePastilles' => GetListePastilles::class,
        'getListePastillesResponse' => GetListePastillesResponse::class,
        'pastille' => Pastille::class,
        'getRecettes' => GetRecettes::class,
        'getRecettesResponse' => GetRecettesResponse::class,
        'getDetailProduitParCUP' => GetDetailProduitParCUP::class,
        'getDetailProduitParCUPResponse' => GetDetailProduitParCUPResponse::class,
        'getListePays' => GetListePays::class,
        'getListePaysResponse' => GetListePaysResponse::class,
        'pays' => Pays::class,
        'getMessage' => GetMessage::class,
        'getMessageResponse' => GetMessageResponse::class,
        'message' => Message::class,
        'getImageURL' => GetImageURL::class,
        'getImageURLResponse' => GetImageURLResponse::class,
        'getPromotion' => GetPromotion::class,
        'getPromotionResponse' => GetPromotionResponse::class,
        'promotion' => Promotion::class,
        'contenu' => Contenu::class,
        'produitPromotion' => ProduitPromotion::class,
        'identiteProduit' => IdentiteProduit::class,
        'getLegalInfos' => GetLegalInfos::class,
        'getLegalInfosResponse' => GetLegalInfosResponse::class,
        'legalInfos' => LegalInfos::class,
        'getDetailsSuccursale' => GetDetailsSuccursale::class,
        'getDetailsSuccursaleResponse' => GetDetailsSuccursaleResponse::class,
        'detailsSuccursale' => DetailsSuccursale::class,
        'horaires' => Horaires::class,
        'horaire' => Horaire::class,
        'getProduitsParMotCleV2' => GetProduitsParMotCleV2::class,
        'getProduitsParMotCleV2Response' => GetProduitsParMotCleV2Response::class,
        'listeProduitV2' => ListeProduitV2::class,
        'getDetailProduitParCUPV2Response' => GetDetailProduitParCUPV2Response::class,
        'getDetailProduitV2Response' => GetDetailProduitV2Response::class,
        'detailProduitV2' => DetailProduitV2::class,
        'attributeV2' => AttributeV2::class,
        'getDetailProduitParCUPV2' => GetDetailProduitParCUPV2::class,
        'getDetailProduitV2' => GetDetailProduitV2::class,
        'getProduitsV2' => GetProduitsV2::class,
        'getProduitsV2Response' => GetProduitsV2Response::class,
        'getProduitsParAccordV2' => GetProduitsParAccordV2::class,
        'getProduitsParAccordV2Response' => GetProduitsParAccordV2Response::class,
        'getRecettesV2' => GetRecettesV2::class,
        'getRecettesParAccordV2' => GetRecettesParAccordV2::class,
        'getRecettesV2Response' => GetRecettesV2Response::class,
        'getRecettesParAccordV2Response' => GetRecettesParAccordV2Response::class,
        'listeRecetteV2' => ListeRecetteV2::class,
        'getDetailProduitParCUPV3Response' => GetDetailProduitParCUPV3Response::class,
        'getDetailProduitV3Response' => GetDetailProduitV3Response::class,
        'cepageDesc' => CepageDesc::class,
        'attributeV3' => AttributeV3::class,
        'detailProduitV3' => DetailProduitV3::class,
        'getDetailProduitParCUPV3' => GetDetailProduitParCUPV3::class,
        'getDetailProduitV3' => GetDetailProduitV3::class,
        'SyncGetDetailProduitDataAreaType' => SyncGetDetailProduitDataAreaType::class,
        'SyncGetDetailProduitParCUPDataAreaType' => SyncGetDetailProduitParCUPDataAreaType::class,
        'SyncGetDetailProduitType' => SyncGetDetailProduitType::class,
        'SyncGetDetailProduitParCUPType' => SyncGetDetailProduitParCUPType::class,
        'SyncGetDetailProduitParCUPResponseDataAreaType' => SyncGetDetailProduitParCUPResponseDataAreaType::class,
        'SyncGetDetailProduitParCUPResponseType' => SyncGetDetailProduitParCUPResponseType::class,
        'SyncGetDetailProduitResponseDataAreaType' => SyncGetDetailProduitResponseDataAreaType::class,
        'SyncGetDetailProduitResponseType' => SyncGetDetailProduitResponseType::class,
        'SyncGetDetailRecetteDataAreaType' => SyncGetDetailRecetteDataAreaType::class,
        'SyncGetDetailRecetteType' => SyncGetDetailRecetteType::class,
        'SyncGetDetailRecetteResponseDataAreaType' => SyncGetDetailRecetteResponseDataAreaType::class,
        'SyncGetDetailRecetteResponseType' => SyncGetDetailRecetteResponseType::class,
        'SyncGetListeCategoriesDataAreaType' => SyncGetListeCategoriesDataAreaType::class,
        'SyncGetListeCategoriesType' => SyncGetListeCategoriesType::class,
        'SyncGetListeCategoriesResponseDataAreaType' => SyncGetListeCategoriesResponseDataAreaType::class,
        'SyncGetListeCategoriesResponseType' => SyncGetListeCategoriesResponseType::class,
        'SyncGetListeCepagesDataAreaType' => SyncGetListeCepagesDataAreaType::class,
        'SyncGetListeCepagesType' => SyncGetListeCepagesType::class,
        'SyncGetListeCepagesResponseDataAreaType' => SyncGetListeCepagesResponseDataAreaType::class,
        'SyncGetListeCepagesResponseType' => SyncGetListeCepagesResponseType::class,
        'SyncGetListePastillesDataAreaType' => SyncGetListePastillesDataAreaType::class,
        'SyncGetListePastillesType' => SyncGetListePastillesType::class,
        'SyncGetListePastillesResponseDataAreaType' => SyncGetListePastillesResponseDataAreaType::class,
        'SyncGetListePastillesResponseType' => SyncGetListePastillesResponseType::class,
        'SyncGetListePaysDataAreaType' => SyncGetListePaysDataAreaType::class,
        'SyncGetListePaysType' => SyncGetListePaysType::class,
        'SyncGetListePaysResponseDataAreaType' => SyncGetListePaysResponseDataAreaType::class,
        'SyncGetListePaysResponseType' => SyncGetListePaysResponseType::class,
        'SyncGetListePrixDataAreaType' => SyncGetListePrixDataAreaType::class,
        'SyncGetListePrixType' => SyncGetListePrixType::class,
        'SyncGetListePrixResponseDataAreaType' => SyncGetListePrixResponseDataAreaType::class,
        'SyncGetListePrixResponseType' => SyncGetListePrixResponseType::class,
        'SyncGetListeTypesPlatDataAreaType' => SyncGetListeTypesPlatDataAreaType::class,
        'SyncGetListeTypesPlatType' => SyncGetListeTypesPlatType::class,
        'SyncGetListeTypesPlatResponseDataAreaType' => SyncGetListeTypesPlatResponseDataAreaType::class,
        'SyncGetListeTypesPlatResponseType' => SyncGetListeTypesPlatResponseType::class,
        'SyncGetProduitsDataAreaType' => SyncGetProduitsDataAreaType::class,
        'SyncGetProduitsType' => SyncGetProduitsType::class,
        'SyncGetProduitsParAccordDataAreaType' => SyncGetProduitsParAccordDataAreaType::class,
        'SyncGetProduitsParAccordType' => SyncGetProduitsParAccordType::class,
        'SyncGetProduitsParAccordResponseDataAreaType' => SyncGetProduitsParAccordResponseDataAreaType::class,
        'SyncGetProduitsParAccordResponseType' => SyncGetProduitsParAccordResponseType::class,
        'SyncGetProduitsParMotCleDataAreaType' => SyncGetProduitsParMotCleDataAreaType::class,
        'SyncGetProduitsParMotCleType' => SyncGetProduitsParMotCleType::class,
        'SyncGetProduitsParMotCleResponseDataAreaType' => SyncGetProduitsParMotCleResponseDataAreaType::class,
        'SyncGetProduitsParMotCleResponseType' => SyncGetProduitsParMotCleResponseType::class,
        'SyncGetProduitsResponseDataAreaType' => SyncGetProduitsResponseDataAreaType::class,
        'SyncGetProduitsResponseType' => SyncGetProduitsResponseType::class,
        'SyncGetRecettesDataAreaType' => SyncGetRecettesDataAreaType::class,
        'SyncGetRecettesType' => SyncGetRecettesType::class,
        'SyncGetRecettesParAccordDataAreaType' => SyncGetRecettesParAccordDataAreaType::class,
        'SyncGetRecettesParAccordType' => SyncGetRecettesParAccordType::class,
        'SyncGetRecettesParAccordResponseDataAreaType' => SyncGetRecettesParAccordResponseDataAreaType::class,
        'SyncGetRecettesParAccordResponseType' => SyncGetRecettesParAccordResponseType::class,
        'SyncGetRecettesResponseDataAreaType' => SyncGetRecettesResponseDataAreaType::class,
        'SyncGetRecettesResponseType' => SyncGetRecettesResponseType::class,
        'SyncGetSuccursalesDataAreaType' => SyncGetSuccursalesDataAreaType::class,
        'SyncGetSuccursalesType' => SyncGetSuccursalesType::class,
        'SyncGetSuccursalesResponseDataAreaType' => SyncGetSuccursalesResponseDataAreaType::class,
        'SyncGetSuccursalesResponseType' => SyncGetSuccursalesResponseType::class,
        'SyncGetMessageDataAreaType' => SyncGetMessageDataAreaType::class,
        'SyncGetMessageType' => SyncGetMessageType::class,
        'SyncGetMessageResponseDataAreaType' => SyncGetMessageResponseDataAreaType::class,
        'SyncGetMessageResponseType' => SyncGetMessageResponseType::class,
        'SyncGetDetailsSuccursaleDataAreaType' => SyncGetDetailsSuccursaleDataAreaType::class,
        'SyncGetDetailsSuccursaleType' => SyncGetDetailsSuccursaleType::class,
        'SyncGetDetailsSuccursaleResponseDataAreaType' => SyncGetDetailsSuccursaleResponseDataAreaType::class,
        'SyncGetDetailsSuccursaleResponseType' => SyncGetDetailsSuccursaleResponseType::class,
        'SyncGetProduitsParMotCleV2Type' => SyncGetProduitsParMotCleV2Type::class,
        'SyncGetProduitsParMotCleV2DataAreaType' => SyncGetProduitsParMotCleV2DataAreaType::class,
        'SyncGetProduitsParMotCleV2ResponseDataAreaType' => SyncGetProduitsParMotCleV2ResponseDataAreaType::class,
        'SyncGetProduitsParMotCleV2ResponseType' => SyncGetProduitsParMotCleV2ResponseType::class,
        'SyncGetDetailProduitParCUPV2ResponseDataAreaType' => SyncGetDetailProduitParCUPV2ResponseDataAreaType::class,
        'SyncGetDetailProduitParCUPV2ResponseType' => SyncGetDetailProduitParCUPV2ResponseType::class,
        'SyncGetDetailProduitV2ResponseDataAreaType' => SyncGetDetailProduitV2ResponseDataAreaType::class,
        'SyncGetDetailProduitV2ResponseType' => SyncGetDetailProduitV2ResponseType::class,
        'SyncGetDetailProduitV2DataAreaType' => SyncGetDetailProduitV2DataAreaType::class,
        'SyncGetDetailProduitV2Type' => SyncGetDetailProduitV2Type::class,
        'SyncGetDetailProduitParCUPV2Type' => SyncGetDetailProduitParCUPV2Type::class,
        'SyncGetDetailProduitParCUPV2DataAreaType' => SyncGetDetailProduitParCUPV2DataAreaType::class,
        'SyncGetProduitsV2DataAreaType' => SyncGetProduitsV2DataAreaType::class,
        'SyncGetProduitsV2Type' => SyncGetProduitsV2Type::class,
        'SyncGetProduitsV2ResponseDataAreaType' => SyncGetProduitsV2ResponseDataAreaType::class,
        'SyncGetProduitsV2ResponseType' => SyncGetProduitsV2ResponseType::class,
        'SyncGetProduitsParAccordV2DataAreaType' => SyncGetProduitsParAccordV2DataAreaType::class,
        'SyncGetProduitsParAccordV2Type' => SyncGetProduitsParAccordV2Type::class,
        'SyncGetProduitsParAccordV2ResponseDataAreaType' => SyncGetProduitsParAccordV2ResponseDataAreaType::class,
        'SyncGetProduitsParAccordV2ResponseType' => SyncGetProduitsParAccordV2ResponseType::class,
        'SyncGetRecettesV2DataAreaType' => SyncGetRecettesV2DataAreaType::class,
        'SyncGetRecettesV2Type' => SyncGetRecettesV2Type::class,
        'SyncGetRecettesParAccordV2DataAreaType' => SyncGetRecettesParAccordV2DataAreaType::class,
        'SyncGetRecettesParAccordV2Type' => SyncGetRecettesParAccordV2Type::class,
        'SyncGetRecettesParAccordV2ResponseDataAreaType' => SyncGetRecettesParAccordV2ResponseDataAreaType::class,
        'SyncGetRecettesParAccordV2ResponseType' => SyncGetRecettesParAccordV2ResponseType::class,
        'SyncGetRecettesV2ResponseDataAreaType' => SyncGetRecettesV2ResponseDataAreaType::class,
        'SyncGetRecettesV2ResponseType' => SyncGetRecettesV2ResponseType::class,
        'SyncGetDetailProduitParCUPV3ResponseDataAreaType' => SyncGetDetailProduitParCUPV3ResponseDataAreaType::class,
        'SyncGetDetailProduitParCUPV3ResponseType' => SyncGetDetailProduitParCUPV3ResponseType::class,
        'SyncGetDetailProduitV3ResponseDataAreaType' => SyncGetDetailProduitV3ResponseDataAreaType::class,
        'SyncGetDetailProduitV3ResponseType' => SyncGetDetailProduitV3ResponseType::class,
        'SyncGetDetailProduitV3DataAreaType' => SyncGetDetailProduitV3DataAreaType::class,
        'SyncGetDetailProduitV3Type' => SyncGetDetailProduitV3Type::class,
        'SyncGetDetailProduitParCUPV3Type' => SyncGetDetailProduitParCUPV3Type::class,
        'SyncGetDetailProduitParCUPV3DataAreaType' => SyncGetDetailProduitParCUPV3DataAreaType::class,
        'SyncGetImageURLDataAreaType' => SyncGetImageURLDataAreaType::class,
        'SyncGetImageURLType' => SyncGetImageURLType::class,
        'SyncGetImageURLResponseDataAreaType' => SyncGetImageURLResponseDataAreaType::class,
        'SyncGetImageURLResponseType' => SyncGetImageURLResponseType::class,
        'SyncGetPromotionDataAreaType' => SyncGetPromotionDataAreaType::class,
        'SyncGetPromotionType' => SyncGetPromotionType::class,
        'SyncGetPromotionResponseDataAreaType' => SyncGetPromotionResponseDataAreaType::class,
        'SyncGetPromotionResponseType' => SyncGetPromotionResponseType::class,
        'SyncGetLegalInfosDataAreaType' => SyncGetLegalInfosDataAreaType::class,
        'SyncGetLegalInfosType' => SyncGetLegalInfosType::class,
        'SyncGetLegalInfosResponseDataAreaType' => SyncGetLegalInfosResponseDataAreaType::class,
        'SyncGetLegalInfosResponseType' => SyncGetLegalInfosResponseType::class,
    ];
    
    
    /**
     */
    public function __construct()
    {
        $options = [];
        foreach (self::$localclassmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        
//        $options['soap_version'] = SOAP_1_2;
        
        parent::__construct(
            ServiceMobile::SAQSERVICE_URI,
            $options
            );
    }
    
 
    /**
     * 
     * @param string $lang
     * @param string $categorie1
     * @param string $categorie2
     * @param string $categorie3
     * @param string $pays
     * @param string $region
     * @param string $pastille
     * @param string $prix
     * @param bool $enRabais
     * @param string $cepage
     * @param TypeTri $tri
     * @param number $premierIndex
     * @param number $maxDesResultats
     * @return boolean|unknown
     */
    public function getProduitsV2($lang = 'Fr', $categorie1 = null, $categorie2 = null, $categorie3 = null, $pays = null , $region = null, $pastille = null, $prix = null, $enRabais = null, $cepage = null, $tri = null, $premierIndex = 0, $maxDesResultats = 10)
    {
        $getProduitsV2 = new GetProduitsV2($lang, $categorie1, $categorie2, $categorie3, $pays, $region, $pastille, $prix, $enRabais, $cepage, $tri, $premierIndex, $maxDesResultats);
        $dataArea = new SyncGetProduitsV2DataAreaType($getProduitsV2);
        $arguments = new SyncGetProduitsV2Type($dataArea);
        
        $response = $this->__call('getProduitsV2', [$arguments]);
        
        if (!$response) {
            return false;
        }
        
        $list = $response->getDataArea()->getProduitsV2Response()->getListeProduitsV2();
        return $list;
    }
    
    /**
     * 
     * @param string $lang
     * @param string $motCle
     * @param TypeTri $tri
     * @param int $premierIndex
     * @param int $maxDesResultats
     * @param bool $filtreInventaire
     * @return ListeProduit
     */
    public function getProduitsParMotCleV2($lang, $motCle, $tri, $premierIndex, $maxDesResultats, $filtreInventaire)
    {
        $arguments = new SyncGetProduitsParMotCleV2Type(
            new SyncGetProduitsParMotCleV2DataAreaType(
                new GetProduitsParMotCleV2($lang, $motCle, $tri, $premierIndex, $maxDesResultats, $filtreInventaire)));
        
        $response = $this->__soapCall('getProduitsParMotCleV2', [$arguments]);
        return $response->getDataArea()->getProduitsParMotCleV2Response()->getListeProduits();
    }
    
    public function getListeCategories()
    {
        $arguments = new SyncGetListeCategoriesType(
            new SyncGetListeCategoriesDataAreaType(
                new GetListeCategories()));
        
        $response = $this->__call('getListeCategories', [$arguments]);
        
        if (!$response) return false;
        
        return $response->getDataArea()->getListeCategoriesResponse()->getCategories();
    }
    
    /**
     * Implements the 'getSuccursales' method
     * @param string $arg0
     * @param string $arg1
     * @return boolean|unknown
     */
    public function getSuccursales($arg0, $arg1)
    {
        $arguments = new SyncGetSuccursalesType(
            new SyncGetSuccursalesDataAreaType(
                new GetSuccursales($arg0, $arg1)));
        
        $response = $this->__call('getSuccursales', [$arguments]);
        
        if (!$response) return false;
        
        return $response->getDataArea()->getSuccursalesResponse()->getSuccursales();
    }
    
    public function getDetailsSuccursale($lang, $id)
    {
        $arguments = new SyncGetDetailsSuccursaleType(
            new SyncGetDetailsSuccursaleDataAreaType(
                new GetDetailsSuccursale($lang, $id)));
        
        $response = $this->__call('getDetailsSuccursale', [$arguments]);
        
        if(!$response) return false;
        
        return $response->getDataArea()->getDetailsSuccursaleResponse()->getDetailsSuccursale();
    }
    
    
    /**
     * Default function for undefined methods
     * {@inheritDoc}
     * @see SoapClient::__call()
     */
    public function __call($function_name, $arguments)
    {
        switch ($function_name) {
            case 'getFunctions':
                return $this->__getFunctions();
                break;
            case 'getTypes':
                return $this->__getTypes();
                break;
            default:
                return $this->__soapCall($function_name, $arguments);
             
        }
    }
}

